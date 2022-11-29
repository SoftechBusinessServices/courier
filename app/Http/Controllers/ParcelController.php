<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Content;
use App\Models\Country;
use App\Models\Currency;
use Carbon\CarbonPeriod;
use App\Models\ParcelNote;
use App\Models\PaymentLog;
use Illuminate\Http\Request;
use App\Models\ParcelShipper;
use App\Models\AllocateParcel;
use App\Models\ParcelConsignee;
use Illuminate\Support\Facades\Response;

class ParcelController extends Controller
{
    //
    public function add_parcel()
    {

        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        $currencies = Currency::all();
        // dd($currencies);

        return view('admin-panel.parcels.create_parcel', compact('data', 'regions', 'currencies', 'countries', 'abc'));
    }

    public function getSelectedShipping($id)
    {
        //echo $id;
        $shipping = Country::find($id)->shipping()->where('country_id', '=', $id)->first();
        return response()->json($shipping);
    }

    public function store_parcel(Request $request)
    {

        // dd($request->all());

        if ($request->shipper_id  == null) {
            // dd(111111);
            $shipper_validated = $request->validate([

                'company_name' => 'required',
                'shipper_phone' => 'required',
                'shipper_country_id' => 'required',
                'shipper_state' => 'required',
                'shipper_city' => 'required',
                'shipper_zip' => 'required',
                'shipper_add1' => 'required',
                'shipper_add2' => 'required',
            ]);
            // dd(22);
            $consignee_validated = $request->validate([

                'parcel_id' => 'required',
                'consignee_name' => 'required',
                'consignee_phone' => 'required',
                'consignee_business' => 'required',
                'consignee_country_id' => 'required',
                'consignee_state' => 'required',
                'consignee_city' => 'required',
                'consignee_zip' => 'required',
                'consignee_add1' => 'required',
                'consignee_add2' => 'required',

            ]);
            // dd(33);
            $parcel_validated = $request->validate([

                'parcel_id' => 'required',
                'service_id' => 'required',
                'payment_method_id' => 'required',
                'pl_boxes' => 'required',
                'pl_weight' => 'required',
                'pl_charges' => 'required',
                'pl_extras' => 'required',
                'pl_discount' => 'required',
                'pl_final' => 'required',
                'pl_description' => 'required',
                // 'pl_date' => 'required',
                // 'shipper_country_id' => 'required',
            ]);
            // dd(44);
            if ($shipper_validated && $consignee_validated && $parcel_validated) {
                // dd(55);
                $data  = [
                    'company_name' => $request->company_name,
                    'shipper_phone' => $request->shipper_phone,
                    'shipper_country_id' => $request->shipper_country_id,
                    'shipper_state' => $request->shipper_state,
                    'shipper_city' => $request->shipper_city,
                    'shipper_zip' => $request->shipper_zip,
                    'shipper_address1' => $request->shipper_add1,
                    'shipper_address2' => $request->shipper_add2,
                ];

                $shipper_id = ParcelShipper::create($data)->id;
                session()->now('message', 'Success! parcel Added.');
                // dd($shipper_id);

                $data  = [

                    // 'pl_id' =>  $record_id,
                    'consignee_name' => $request->consignee_name,
                    'consignee_phone' => $request->consignee_phone,
                    'consignee_business' => $request->consignee_business,
                    'consignee_country_id' => $request->consignee_country_id,
                    'consignee_state' => $request->consignee_state,
                    'consignee_city' => $request->consignee_city,
                    'consignee_zip' => $request->consignee_zip,
                    'consignee_address1' => $request->consignee_add1,
                    'consignee_address2' => $request->consignee_add2,
                ];
                $consignee_id = ParcelConsignee::create($data)->id;
                session()->now('message', 'Success! parcel Added.');
                // dd($consignee_id);


                $data  = [

                    'parcel_id' => $request->parcel_id,
                    'shipper_id' => $shipper_id,
                    'consignee_id' => $consignee_id,
                    'pl_boxes' => $request->pl_boxes,
                    'pl_weight' => $request->pl_weight,
                    'service_id' => $request->service_id,
                    'pl_charges' => $request->pl_charges,
                    'pl_extras' => $request->pl_extras,
                    'pl_discount' => $request->pl_discount,
                    'pl_final' => $request->pl_final,
                    'pl_description' => $request->pl_description,
                    'payment_id' => $request->payment_method_id,
                    // 'consignee_country_id' => $request->consignee_country_id,
                    // 'shipper_country_id' => $request->shipper_country_id,
                ];
                // dd(2);
                $pl_id = Parcel::create($data)->id;
                // dd($pl_id);


                // $a = $request->userData['0']['disp_content'];
                for ($i = 0; $i < count($request->disp_content); $i++) {
                    // dd(24);

                    $data = [
                        'pl_id'  =>  $pl_id,
                        'disp_content'  =>  $request->disp_content[$i],
                        'disp_condition'  =>  $request->disp_condition[$i],
                        'currency_id'  =>  $request->disp_currency[$i],
                        'disp_price'  =>  $request->disp_price[$i],
                        'disp_quantity'  =>  $request->disp_quantity[$i],
                        'disp_total'  =>  $request->disp_total[$i],

                    ];
                    $record = ParcelNote::create($data);
                    session()->now('message', 'Success! parcel Added.');
                } //for loop closed


            }  //parcel validated
            // dd(99);
            return redirect()->back()->with('success', "Record inserted Successfully");
        } //if shipper-id-NULL-selected

        else {
            // dd(22222);
            $consignee_validated = $request->validate([

                'parcel_id' => 'required',
                'consignee_name' => 'required',
                'consignee_phone' => 'required',
                'consignee_business' => 'required',
                'consignee_country_id' => 'required',
                'consignee_state' => 'required',
                'consignee_city' => 'required',
                'consignee_zip' => 'required',
                'consignee_add1' => 'required',
                'consignee_add2' => 'required',

            ]);
            $parcel_validated = $request->validate([

                'parcel_id' => 'required',
                'service_id' => 'required',
                'payment_method_id' => 'required',
                'pl_boxes' => 'required',
                'pl_weight' => 'required',
                'pl_charges' => 'required',
                'pl_extras' => 'required',
                'pl_discount' => 'required',
                'pl_final' => 'required',
                'pl_description' => 'required',
                // 'pl_date' => 'required',
                // 'shipper_country_id' => 'required',
            ]);
            if ($consignee_validated && $parcel_validated) {
                // dd(1);
                $data  = [

                    // 'pl_id' =>  $record_id,
                    'consignee_name' => $request->consignee_name,
                    'consignee_phone' => $request->consignee_phone,
                    'consignee_business' => $request->consignee_business,
                    'consignee_country_id' => $request->consignee_country_id,
                    'consignee_state' => $request->consignee_state,
                    'consignee_city' => $request->consignee_city,
                    'consignee_zip' => $request->consignee_zip,
                    'consignee_address1' => $request->consignee_add1,
                    'consignee_address2' => $request->consignee_add2,
                ];
                $consignee_id = ParcelConsignee::create($data)->id;
                session()->now('message', 'Success! parcel Added.');
                // return $consignee_id;

                $data  = [

                    'parcel_id' => $request->parcel_id,
                    'shipper_id' => $request->shipper_id,
                    'consignee_id' => $consignee_id,
                    'pl_boxes' => $request->pl_boxes,
                    'pl_weight' => $request->pl_weight,
                    'service_id' => $request->service_id,
                    'pl_charges' => $request->pl_charges,
                    'pl_extras' => $request->pl_extras,
                    'pl_discount' => $request->pl_discount,
                    'pl_final' => $request->pl_final,
                    'pl_description' => $request->pl_description,
                    'payment_id' => $request->payment_method_id,
                    // 'consignee_country_id' => $request->consignee_country_id,
                    // 'shipper_country_id' => $request->shipper_country_id,
                ];
                $pl_id = Parcel::create($data)->id;

                // $a = $request->userData['0']['disp_content'];
                for ($i = 0; $i < count($request->disp_content); $i++) {
                    // dd(24);

                    $data = [
                        'pl_id'  =>  $pl_id,
                        'disp_content'  =>  $request->disp_content[$i],
                        'disp_condition'  =>  $request->disp_condition[$i],
                        'currency_id'  =>  $request->disp_currency[$i],
                        'disp_price'  =>  $request->disp_price[$i],
                        'disp_quantity'  =>  $request->disp_quantity[$i],
                        'disp_total'  =>  $request->disp_total[$i],

                    ];
                    $record = ParcelNote::create($data);

                    session()->now('message', 'Success! parcel Added.');
                } //for loop closed


            }  //parcel validated

            return redirect()->back()->with('success', "Record inserted Successfully");
        }
    } //store-parcel function closed

    public function edit_parcel($id)
    {
        dd($id);
        $data = Parcel::find($id);
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.parcels.edit_parcel', compact('data', 'countries'));
    }
    public function parcel_details($id)
    {
        // dd($id);
        $data = Parcel::with(['parcel_with_payment', 'parcel_with_service', 'parcel_with_shipper' => function ($query) {
            $query->with('shipper_with_country');
        }, 'parcel_with_consignee' => function ($query) {
            $query->with('consignee_with_country');
        }, 'parcel_with_notes' => function ($query) {
            $query->with('notes_with_currency');
        }])->find($id);
        $description = Content::whereIn('id', $data->pl_description)->get()->pluck('name')->toArray();
        $pl_description = $data->description = implode('+', $description);
        // dd( $data->description);
        // dd($description);

        return view('admin-panel.parcels.parcel_details', compact('data', 'pl_description'));
    }

    public function update_parcel(Request $request, $id)
    {
        // dd($request->all());
        $parcel = Parcel::find($id);
        // dd($product);
        $request->validate([
            'region_id' => 'required',
            'country_id' => 'required',
            'pl_weight' => 'required',
            'chargeable_weight' => 'required',
            'currency_id' => 'required',
            'pl_symbol' => 'required',
            'pl_cost' => 'required',
            'pl_extras' => 'required',
            'pl_discount' => 'required',
            'pl_final' => 'required',
            'pl_date' => 'required',
            'pl_description' => 'required',
        ]);
        // dd(1);
        $data  = [
            'region_id' => $request->region_id,
            'country_id' => $request->country_id,
            'pl_weight' => $request->pl_weight,
            'chargeable_weight' => $request->chargeable_weight,
            'currency_id' => $request->currency_id,
            'pl_symbol' => $request->pl_symbol,
            'pl_cost' => $request->pl_cost,
            'pl_extras' => $request->pl_extras,
            'pl_discount' => $request->pl_discount,
            'pl_final' => $request->pl_final,
            'pl_description' => $request->pl_description,
            'pl_date' => $request->pl_date,
        ];

        $data = $parcel->update($data);
        // dd($data);

        if ($data) {

            return redirect('add-parcel')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_parcel($id)
    {
        // dd($id);
        $data = Parcel::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }

    public function search_tracking_id(Request $request)
    {
        // dd($request);
        $search = Parcel::with('parcel_with_shipper')->where('parcel_id', 'Like', '%' . $request->search . '%')->first();
        // dd($search);
        // $search_id = $search->id;
        // $employee = ParcelConsignee::where('id',$search_id)->first();
        // dd($employee);
        if ($search->count() > 0) {
            return response()->json($search);
        }
        else{
            return response()->json();
        }
       
    }

    public function vendor_details_list(Request $request)
    {
        $alocatedids = AllocateParcel::where('vendor_id', $request->id)->pluck('pl_id');
        // echo $alocatedids;
        $delivered_parcels = Parcel::with('allocate_parcel', 'parcel_tracking', 'parcel_charges',)
            ->where('pl_status', 'delivered')
            ->whereIn('id', $alocatedids)
            ->get();
        // echo($delivered_parcels);
        return $delivered_parcels;
    }
    public function customer_details_list(Request $request)
    {
        // $parcel_shipper_details = Parcel::with('country', 'consignee','parcel_shipper_details')->whereIn('pl_status', ['processed','delivered','allocated'])->get();
        // dd($parcel_shipper_details);
        $customer_ids = ParcelShipper::where('company_name', $request->id)->pluck('pl_id');
        // echo $customer_ids;
        $delivered_parcels = Parcel::with('allocate_parcel', 'parcel_tracking', 'parcel_charges', 'parcel_consignee')
            ->where('pl_status', 'delivered')
            ->whereIn('id', $customer_ids)
            ->get();
        // echo $delivered_parcels;
        return $delivered_parcels;
    }

    public function date_tracking(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
            ->toDateTimeString();

        $end_date = Carbon::parse($request->end_date)
            ->toDateTimeString();

        $dated_data = Parcel::with(
            'parcel_with_tracking',
            'parcel_with_charges'
        )
            ->whereBetween('created_at', [$start_date, $end_date])
            ->where('pl_status', 'delivered')
            ->get();
        return response()->json($dated_data);
    }


    public function date_wise_customer_record(Request $request)
    {   
        // dd($request->all());
        // $dates = [];
        $customer_id = $request->selected_customer_id;
        // dd($customer_id);
        $start_date = Carbon::parse($request->start_date)
            ->toDateTimeString();

        $end_date = Carbon::parse($request->end_date)
            ->toDateTimeString();
        // dd($start_date,$end_date);
        //"2022-10-20 00:00:00", "2022-10-28 00:00:00"

        // $data =Parcel::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->exists();
        //true
        $parcel_dates = Parcel::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->pluck('created_at');
        $log_dates = PaymentLog::whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->pluck('created_at');
        // dd($parcel_dates,$log_dates);
        
        $merged_dates = $parcel_dates->merge($log_dates);
        // dd($merged_dates);
        
        $sorted_dates = $merged_dates->sortBy('created_at')->toArray();
        // dd($sorted_dates);
        
        // $time_stamps = $sorted_dates->pick('created_at') ;
        // dd($time_stamps);
        
        $selected_parcels = Parcel::with('parcel_with_payment_log')
        ->where($sorted_dates)
        ->where('shipper_id',$customer_id)->get();
           dd($selected_parcels);
        
        $selected_logs = PaymentLog::
        // with('paymentlog_with_parcel')
        where('customer_type','1')
        ->where('vcid',$customer_id)
        ->get();
        //    dd($selected_logs);
        
        $merged_parcels = $selected_parcels->concat($selected_logs)->sortBy('created_at');
        dd($merged_parcels);





        // $dated_parcels = Parcel::with(
        //     'parcel_with_tracking',
        //     'parcel_with_charges'
        // )
        //     ->whereBetween('created_at', [$start_date, $end_date])
        //     // ->where('pl_status', 'delivered')
        //     ->get();

        //     $dated_logs= PaymentLog::with('paymentlog_with_method')
        //     ->where('payment_logs.customer_type', '1')
        //     // ->where('payment_logs.vcid', $customer_id)
        //     ->whereBetween('created_at', [$start_date, $end_date])
        //     ->orderBy('payment_logs.id', 'ASC')
        //     ->get();
        // // dd($data['cutomer_payments']);        
        // return Response::json(['dated_parcels'=>$dated_parcels,'dated_logs'=>$dated_logs]);
        // //    dd($users);

        // return view('admin-panel.report', compact('users'));
    }
}
