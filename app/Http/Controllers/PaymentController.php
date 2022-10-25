<?php

namespace App\Http\Controllers;

use App\Exports\CustomersExport;
use App\Models\User;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Company;
use App\Models\Content;
use App\Models\Country;
use App\Models\Service;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Logistic;
use App\Models\PaymentLog;
use Illuminate\Http\Request;
use App\Models\ParcelShipper;
use App\Models\PaymentMethod;
use App\Models\VendorCharges;
use App\Models\AllocateParcel;
use Illuminate\Support\Facades\DB;
use Excel;


class PaymentController extends Controller
{
    //
    //
    public function create_payment_method()
    {
        $data = PaymentMethod::all();
        return view('admin-panel.payments.create_payment_method', compact('data'));
    }
    public function store_payment_method(Request $request)
    {
        //  dd($request->all());
        $request->validate([

            'payment_method' => 'required|unique:payment_methods',
        ]);

        $data = ['payment_method' => $request->payment_method];
        $data = PaymentMethod::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }

    public function edit_payment_method($id)
    {
        // dd(1);
        $record = PaymentMethod::find($id);
        $data = PaymentMethod::all();

        return view('admin-panel.payments.edit_payment_method', compact('data', 'record'));
    }
    public function update_payment_method(Request $request, $id)
    {
        // dd(2);
        $request->validate([
            'payment_method' => 'required',
        ]);

        $record = PaymentMethod::find($id);
        $data = ['payment_method' => $request->payment_method];
        $data = $record->update($data);

        if ($data) {
            return redirect('add-payment-method')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function destroy_payment_method($id)
    {
        $data = PaymentMethod::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-payment-method')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //-------------Vendor Payments Functions---------------//
    public function get_vendor_payment_dues(Request $request)
    {
        // dd($request->all());
        $paidAmount = PaymentLog::where('vcid', $request->vendor_id)
            ->where('customer_type','2')
            ->latest()->take(1)->sum('collected_amount');
        // $record = VendorCharges::where('vendor_id', $request->vendor_id)->latest()->take(1)->first();
        // $remaingAmount = ($record) ? $record->remaining_amount : 0;
        // return $remaingAmount;
        $totalAmount = VendorCharges::where('vendor_id',$request->vendor_id)->sum('vendor_tracking_charges');
        // return [ $totalAmount , $paidAmount];

        $record = ['vendor_tracking_charges' => $totalAmount - $paidAmount];
        return response()->json($record);
    }

    public function vendor_payment_add(Request $request)
    {
        // dd($request->all());
        // dd( $totalAmount);
        $insert = [
            'customer_type' => '2',
            'vcid' => $request->vendor_id,
            'payment_method_id' => $request->payment_method_id,
            'invoice_id' => 0,
            'collected_amount' => $request->collected_amount,
            'remaining_amount' => $request->show_vendor_balance - $request->collected_amount,
        ];
        // dd($insert, $request->all());
        PaymentLog::create($insert);
        return redirect()->back()->with(['success' => 'Successfully added.']);
    }

    public function vendor_payment(Request $request)
    {
        // dd(1);
        $vendor_id = ($request->has('vendor')) ? $request->vendor : 0;

        $data['allocated_parcels'] = DB::table('allocate_parcels')
            ->leftJoin('parcels', 'parcels.id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('payment_methods', 'parcels.payment_id', '=', 'payment_methods.id')
            ->leftJoin('companies', 'companies.id', '=', 'allocate_parcels.vendor_id')
            ->leftJoin('parcel_shippers', 'parcels.shipper_id', '=', 'parcel_shippers.id')
            ->leftJoin('parcel_consignees', 'parcels.consignee_id', '=', 'parcel_consignees.id')
            ->leftJoin('countries', 'countries.id', '=', 'parcel_consignees.consignee_country_id')
            ->leftJoin('vendor_charges', 'vendor_charges.pl_id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('vendor_id_trackings', 'vendor_id_trackings.pl_id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('services', 'allocate_parcels.service_id', '=', 'services.id')
            ->where('allocate_parcels.vendor_id', $vendor_id)
            ->orderBy('allocate_parcels.vendor_id', 'ASC')
            ->get();
            foreach($data['allocated_parcels'] as $row):
                $description = Content::whereIn('id',json_decode($row->pl_description,true))
                ->get()
                ->pluck('name')
                ->toArray();
                $row->description = implode(" ", $description);
            endforeach;

            // dd($data['allocated_parcels']);
        $data['totalAmount'] = array_sum($data['allocated_parcels']->pluck('vendor_tracking_charges')->toArray());
        // dd( $data['totalAmount'] );

        $data['payment_logs'] = DB::table('payment_logs')
            ->where('payment_logs.customer_type', '2')
            ->where('payment_logs.vcid', $vendor_id)
            ->orderBy('payment_logs.id', 'ASC')
            ->get();
        // $data['totalpaid'] = array_sum($data['payment_logs']->pluck('collected_amount')->toArray());
        // dd($data['totalpaid']);

        $check = PaymentLog::where('vcid', $vendor_id)
            ->where('customer_type', '2')
            ->latest()->take(1)->sum('collected_amount');

        // $remaingAmount = ($check) ? $check->remaining_amount : 0;
        $data['totalpaid'] =  $check;
        $data['companies'] = Company::all();
        // dd($data);
        // dd(2);
        return view('admin-panel.payments.vendor_payments')->with($data);
    }



    //-------------Customer Payments Functions---------------//
    public function get_customer_payment_dues(Request $request)
    {
        // dd($request->all());
        // $record = PaymentLog::where('vcid', $request->vendor_id)->latest()->take(1)->first();
        // $record1 = Parcel::where('shipper_id', $request->customer_id)->latest()->take(1)->first();
        $last_record = PaymentLog::where('vcid', $request->customer_id)
            ->where('customer_type', '1')->latest()->take(1)->first();
        // dd($last_record);
        if($last_record !=null){

            $last_record = PaymentLog::where('vcid', $request->customer_id)
            ->where('customer_type', '1')->latest()->take(1)->first()->remaining_amount;
            return response()->json($last_record);
        }
        else{
            $last_record = array_sum(Parcel::where('shipper_id', $request->customer_id)->pluck('pl_final')->toArray());
            return response()->json($last_record);
        }
        
        // $remaingAmount = ($record) ? $record->remaining_amount : 0;
        // return $remaingAmount;
        // return response()->json($last_record);
    }

    public function customer_payment_add(Request $request)
    {
        // dd($request->all());
        $remainingAmount = '';
        // dd($remainingAmount);
        $totalAmount = array_sum(Parcel::where('shipper_id', $request->customer_id)->pluck('pl_final')->toArray());
        // dd( $totalAmount);
        $last_record = PaymentLog::where('vcid', $request->customer_id)
            ->where('customer_type', '1')->latest()->take(1)->first();
        // dd($last_record);
        if ($last_record != null) {
            // dd(11);
            $last_record = PaymentLog::where('vcid', $request->customer_id)
                ->where('customer_type', '1')->latest()->take(1)->first();
                // dd($last_record);
            $remainingAmount = $last_record->remaining_amount;
            // dd($remainingAmount);
          
            $insert = [
                'customer_type' => '1',
                'vcid' => $request->customer_id,
                'payment_method_id' => $request->payment_method_id,
                'invoice_id' => 0,
                'collected_amount' => $request->collected_amount,
                'remaining_amount' => $remainingAmount - $request->collected_amount,
            ];
            // dd($insert, $request->all());
            $row = PaymentLog::create($insert);
            // dd($row);
            return redirect()->back()->with('success', "Successfully added.");
        } else {
            //    dd(22);
            $remainingAmount = $totalAmount;
            // dd($remainingAmount);
            $insert = [
                'customer_type' => '1',
                'vcid' => $request->customer_id,
                'payment_method_id' => $request->payment_method_id,
                'invoice_id' => 0,
                'collected_amount' => $request->collected_amount,
                'remaining_amount' => $remainingAmount - $request->collected_amount,
            ];
            // dd($insert, $request->all());
            $row = PaymentLog::create($insert);
            // dd($row);
            return redirect()->back()->with('success', "Successfully added.");
        }

    }

    public function customer_payment(Request $request)
    {

        $data['customers'] =  ParcelShipper::all();

        $customer_id = ($request->has('customer')) ? $request->customer : 0;

        $data['allocated_parcels'] = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_charges', 'parcel_with_tracking', 

       
            'parcel_with_shipper' => function ($query) {
                $query->with('shipper_with_country');
            },
            'parcel_with_consignee' => function ($query) {
                $query->with('consignee_with_country');
            }
        ])
            ->where('shipper_id', $customer_id)
            ->whereIn('pl_status', ['allocated','delivered','processed'])
            ->orderBy('shipper_id', 'DESC')
            ->get();
            //  dd( $data['allocated_parcels'] );

            foreach($data['allocated_parcels'] as $val):
                
                $description = Content::whereIn('id',$val->pl_description)
                ->get()
                ->pluck('name')->toArray();
                $val->description = implode(" ", $description);
            endforeach;
             

        $data['totalAmount'] = array_sum(Parcel::where('parcels.shipper_id', $customer_id)->pluck('pl_final')->toArray());
        // dd( $data['totalAmount'] );

        $data['payment_logs'] = PaymentLog::with('paymentlog_with_method')
            ->where('payment_logs.customer_type', '1')
            ->where('payment_logs.vcid', $customer_id)
            ->orderBy('payment_logs.id', 'ASC')
            ->get();
        // dd($data['payment_logs']);

        $data['totalpaid'] = array_sum($data['payment_logs']->pluck('collected_amount')->toArray());
        // dd($data['totalpaid']);

        $check = PaymentLog::where('vcid', $customer_id)->latest()->take(1)->first();
        // dd($check);

        $remainingAmount = ($check) ? $check->remaining_amount : 0;

        // $data['totalpaid'] =  $remainingAmount;

        $data['dues'] =  $data['totalAmount'] - $data['totalpaid'];
        // dd($data['dues']);

        // $description = Content::whereIn('id',$data->pl_description)->get()->pluck('name')->toArray();
        // $pl_description =$data->description = implode('+', $description);
        
       
        return view('admin-panel.payments.customer_payments')->with($data);

    }


     // Excel Export
     public function exportExcel(Request $request){
        // dd($request->all());

        // $file_name = 'customer_payments_'.date('Y_m_d_H_i_s').'.xlsx';
        // return Excel::download($record, $file_name);
        return Excel::download(new CustomersExport, 'invoices.xlsx');
      
     }

}
