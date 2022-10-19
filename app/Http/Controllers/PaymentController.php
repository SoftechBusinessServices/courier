<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Company;
use App\Models\Country;
use App\Models\Service;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Logistic;
use Illuminate\Http\Request;
use App\Models\ParcelShipper;
use App\Models\PaymentMethod;
use App\Models\AllocateParcel;
use App\Models\PaymentLog;
use Illuminate\Support\Facades\DB;

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

     public function vendor_payment(Request $request){
        $vendor_id = ($request->has('vendor')) ? $request->vendor : 0;
        $data['allocated_parcels'] = DB::table('allocate_parcels')
            ->leftJoin('parcels','parcels.id','=','allocate_parcels.pl_id')
            ->leftJoin('vendor_charges','vendor_charges.pl_id','=','allocate_parcels.pl_id')
            ->leftJoin('vendor_id_trackings','vendor_id_trackings.pl_id','=','allocate_parcels.pl_id')
            ->where('allocate_parcels.vendor_id',$vendor_id)
            ->orderBy('allocate_parcels.vendor_id','DESC')
            ->get();
            // dd($data);
        $data['totalAmount'] = array_sum ($data['allocated_parcels']->pluck('vendor_tracking_charges')->toArray());
        // dd( $data['totalAmount'] );
        $data['payment_logs'] = DB::table('payment_logs')
            ->where('payment_logs.customer_type','2')
            ->where('payment_logs.vcid',$vendor_id)
            ->orderBy('payment_logs.id','DESC')
            ->get();
        // $data['totalpaid'] = array_sum($data['payment_logs']->pluck('collected_amount')->toArray());
        // dd($data['totalpaid']);
        $check = PaymentLog::where('vcid', $request->vendor_id)->latest()->take(1)->first();
        $remaingAmount = ($check) ? $check->remaining_amount : 0;
        $data['totalpaid'] =  $remaingAmount;
        $data['companies'] = Company::all();
        // dd($data['payment_logs']);
        return view('admin-panel.payments.vendor_payments')->with($data);
        //  $data = Parcel::all();
        // // dd($data);
        // $regions = Region::all();
        // $countries = Country::all();
        // // $charges = ShippingCharge::all();
        // $customers = Customer::all();
        // // dd(1);
        // $users = User::all();
        // $countries = Country::all();

        // $currencies = Currency::all();
        // $services = Service::all();
        
        // $shipper_names = ParcelShipper::with('shipper_parcel_details')->get()->unique('company_name');
        // // dd($shipper_names);
        // $processed_parcels = Parcel::with('country', 'consignee')->where('pl_status', 'processed')->get();
        // // dd($processed_parcels);

        // $delivered_parcels = Parcel::with('parcel_tracking', 'parcel_charges',)->where('pl_status', 'delivered')->get();
        // // dd($delivered_parcels);
        // //    dd(DB::getQueryLog());
        // // DB::enableQueryLog();

        // // $processed_parcels = Parcel::with('country','consignee')->where('pl_status', 'processed')->get();
        // $allocated_parcels =  Parcel::with(['country', 'parcel_tracking', 'parcel_charges', 'allocate_parcel' => function ($query) {
        //     $query->with(['service', 'allocate_logistic' => function ($query) {

        //         $query->with('logistic_company');
        //     }]);
        // }])
        //     ->whereIn(
        //         'pl_status',
        //         ['allocated', 'delivered']
        //     )
        //     // ->orWhere('pl_status', 'delivered')
        //     ->get();
        // // dd(DB::getQueryLog());
        // // dd($allocated_parcels);



        // $logistics = Logistic::all();
        // $payment_methods = PaymentMethod::all();
        // $vendors =  Logistic::with('logistic_company')->get();
        // $companies = Company::get();
        // // dd($vendors);
        // // dd($data);
        // return view('admin-panel.payments.vendor_payments',compact('data', 'regions',  'countries', 'companies', 'currencies', 'customers', 'services',  'processed_parcels', 'allocated_parcels', 'logistics', 'payment_methods', 'users', 'vendors', 'delivered_parcels', 'shipper_names'));
     }

     public function customer_payment(){
       
        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        $customers = Customer::all();
        // dd(1);
        $users = User::all();
        $countries = Country::all();
        $companies = Company::all();
        $currencies = Currency::all();
        $services = Service::all();
        
        $shipper_names = ParcelShipper::with('shipper_parcel_details')->get()->unique('company_name');
        // dd($shipper_names);
        $processed_parcels = Parcel::with('country', 'consignee')->where('pl_status', 'processed')->get();
        // dd($processed_parcels);

        $delivered_parcels = Parcel::with('parcel_tracking', 'parcel_charges',)->where('pl_status', 'delivered')->get();
        // dd($delivered_parcels);
        //    dd(DB::getQueryLog());
        // DB::enableQueryLog();

        // $processed_parcels = Parcel::with('country','consignee')->where('pl_status', 'processed')->get();
        $allocated_parcels =  Parcel::with(['country', 'parcel_tracking', 'parcel_charges', 'allocate_parcel' => function ($query) {
            $query->with(['service', 'allocate_logistic' => function ($query) {

                $query->with('logistic_company');
            }]);
        }])
            ->whereIn(
                'pl_status',
                ['allocated', 'delivered']
            )
            // ->orWhere('pl_status', 'delivered')
            ->get();
        // dd(DB::getQueryLog());
        // dd($allocated_parcels);



        $logistics = Logistic::all();
        $payment_methods = PaymentMethod::all();
        $vendors =  Logistic::with('logistic_company')->get();
        $companies = Company::get();
        // dd($vendors);
        // dd($data);
        return view('admin-panel.payments.customer_payments', compact('data', 'regions',  'countries', 'companies', 'currencies', 'customers', 'services',  'processed_parcels', 'allocated_parcels', 'logistics', 'payment_methods', 'users', 'vendors', 'delivered_parcels', 'shipper_names'));
     }

     
     public function balance_sheet(){
       
        // return view('admin-panel.payments.customer_payments');
     }

     public function get_vendor_payment_dues(Request $request){

        $record = PaymentLog::where('vcid', $request->vendor_id)->latest()->take(1)->first();
        $remaingAmount = ($record) ? $record->remaining_amount : 0;
        return $remaingAmount;
     }

     public function vendor_payment_add(Request $request){
        
        $record = PaymentLog::where('vcid', $request->add_balance_vendor_id)->latest()->take(1)->first();
        $remaingAmount = ($record) ? $record->remaining_amount : 0;
        $insert = [
            'customer_type' => '2',
            'vcid' => $request->add_balance_vendor_id,
            'invoice_id' => 0,
            'collected_amount' => $request->collected_amount,
            'remaining_amount' => $remaingAmount - $request->collected_amount,
        ];
        // dd($insert, $request->all());
        PaymentLog::create($insert);
        return redirect()->back()->with(['success' => 'Successfully added.']) ;
     }

}
