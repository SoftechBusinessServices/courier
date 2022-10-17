<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Country;
use App\Models\Currency;
use App\Models\ParcelNote;
use Illuminate\Http\Request;
use App\Models\ParcelShipper;
use App\Models\AllocateParcel;
use App\Models\ParcelConsignee;

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
        // dd($charges);
        
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
        $parcel_validated = $request->validate([

            'pl_id' => 'required',
            'service_id' => 'required',
            'payment_method_id' => 'required',
            'pl_boxes' => 'required',
            'pl_weight' => 'required',
            'pl_charges' => 'required',
            'pl_extras' => 'required',
            'pl_discount' => 'required',
            'pl_final' => 'required',
            'pl_description' => 'required',
            'pl_date' => 'required',
            'shipper_country_id' => 'required',
        ]);
        // dd(1);
        if ($parcel_validated) {
            // dd(2);
            //parcel_insertion
            $data  = [

                'pl_id' => $request->pl_id,
                'pl_boxes' => $request->pl_boxes,
                'pl_weight' => $request->pl_weight,
                'service_id' => $request->service_id,
                'pl_charges' => $request->pl_charges,
                'pl_extras' => $request->pl_extras,
                'pl_discount' => $request->pl_discount,
                'pl_final' => $request->pl_final,
                'pl_description' => $request->pl_description,
                'payment_id' => $request->payment_method_id,
                'consignee_country_id' => $request->consignee_country_id,
                'shipper_country_id' => $request->shipper_country_id,
            ];
            // if($request->shipping_country_id !=null){
            //     $data =['shipper_country_id'=>$request->shipper_country_id];
            // }
           
            $record_id = Parcel::create($data)->id;
            // dd($record_id);
            session()->now('message', 'Success! parcel Added.');
        } else {
            dd(3333);
            return back()->with('error', "Parcel insertion failed!");
        }
        // dd(4);
        //pacel_phone_searching
        if ($request->pl_phone_id  !== null) {

            // dd('phone_search not null');
            $request->validate([
                $request->pl_phone_id
            ]);
            $data  = [

                'pl_id' => $record_id,
                'pl_date' => $request->pl_date,
                'pl_phone_id' => $request->pl_phone_id,
            ];
            $record = ParcelShipper::create($data);
            session()->now('message', 'Success! parcel Added.');
            // dd(00);

        } //old_parcel_shipper
        else {
            // dd(6);
            // dd('Phone search null');
            $shipper_validated = $request->validate([

                'pl_id' => 'required',
                'pl_date' => 'required',
                'company_name' => 'required',
                'shipper_phone' => 'required',
                'shipper_country_id' => 'required',
                'shipper_state' => 'required',
                'shipper_city' => 'required',
                'shipper_zip' => 'required',
                'shipper_add1' => 'required',
                'shipper_add2' => 'required',
            ]);

            // dd(7);
            if ($shipper_validated) {
                // dd(8);
                //shipper details insertion
                // $pl_phone_id= $request->shipper_phone;
                $data  = [

                    'pl_id' =>  $record_id,
                    'pl_date' => $request->pl_date,
                    'pl_phone_id' => "123",
                    'company_name' => $request->company_name,
                    'shipper_phone' => $request->shipper_phone,
                    'shipper_country_id' => $request->shipper_country_id,
                    'shipper_state' => $request->shipper_state,
                    'shipper_city' => $request->shipper_city,
                    'shipper_zip' => $request->shipper_zip,
                    'shipper_address1' => $request->shipper_add1,
                    'shipper_address2' => $request->shipper_add2,
                ];
                $record = ParcelShipper::create($data);
                session()->now('message', 'Success! parcel Added.');
                // dd(00);
            } else {
                dd(9);
                return redirect()->back()->with('error', "Shipper Datails not Inserted!");
            }

            // dd(10);
        } // new_parcel_shipper


        // dd(11);
        // dd($request->all());
        $consignee_validated = $request->validate([

            'pl_id' => 'required',
            'consignee_name' => 'required',
            'consignee_phone' => 'required',
            // 'consignee_business' => 'required',
            'consignee_country_id' => 'required',
            'consignee_state' => 'required',
            'consignee_city' => 'required',
            'consignee_zip' => 'required',
            'consignee_add1' => 'required',
            'consignee_add2' => 'required',

        ]);
        // dd(12);
        if ($consignee_validated) {
            // dd(13);
            if ($request->consignee_business !== null) {

                $data = [
                    'pl_id' =>  $record_id,
                    'consignee_name' => $request->consignee_name,
                    'consignee_phone' => $request->consignee_phone,
                    'consignee_country_id' => $request->consignee_country_id,
                    'consignee_state' => $request->consignee_state,
                    'consignee_city' => $request->consignee_city,
                    'consignee_zip' => $request->consignee_zip,
                    'consignee_address1' => $request->consignee_add1,
                    'consignee_address2' => $request->consignee_add2,
                    'consignee_business' => $request->consignee_business
                ];

            } else{
                $data  = [

                    'pl_id' =>  $record_id,
                    'consignee_name' => $request->consignee_name,
                    'consignee_phone' => $request->consignee_phone,
                    'consignee_country_id' => $request->consignee_country_id,
                    'consignee_state' => $request->consignee_state,
                    'consignee_city' => $request->consignee_city,
                    'consignee_zip' => $request->consignee_zip,
                    'consignee_address1' => $request->consignee_add1,
                    'consignee_address2' => $request->consignee_add2,
                ];
            }


            $record = ParcelConsignee::create($data);
            session()->now('message', 'Success! parcel Added.');
            // dd(20);
        } else {
            // dd(21);
            return redirect()->back()->with('error', "Consignee Datails not Inserted!");
        }

        // $a = $request->userData['0']['disp_content'];


        for ($i = 0; $i < count($request->disp_content); $i++) {
            // dd(24);

            $data = [
                'pl_id'  =>  $record_id,
                'disp_content'  =>  $request->disp_content[$i],
                'disp_condition'  =>  $request->disp_condition[$i],
                'currency_id'  =>  $request->disp_currency[$i],
                'disp_price'  =>  $request->disp_price[$i],
                'disp_quantity'  =>  $request->disp_quantity[$i],
                'disp_total'  =>  $request->disp_total[$i],

            ];
            $record = ParcelNote::create($data);
            session()->now('message', 'Success! parcel Added.');
        }

        // dd(25);

        // if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        // } else {
        //     return redirect()->back()->with('error', "Record Not inserted ---");
        // }
    }

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
        $data = Parcel::with('consignee')->find($id);
        // dd($data);
    
        return view('admin-panel.parcels.parcel_details', compact('data'));
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

        $data = Parcel::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }

    public function search(Request $request){
        
        
        // dd($request->all());
        $output = "";
        $employee = ParcelShipper::where('shipper_phone', 'Like' ,'%'.$request->search.'%')->first();

        // foreach($employee as $row){

        //     $output.=
        //     '<tr>
        //     <td>'.$row->shipper_phone.'<td>
        //     <tr>';

        // }

        return response($employee);
    }

    public function vendor_details_list(Request $request)
    {   
        $alocatedids = AllocateParcel::where('vendor_id',$request->id)->pluck('pl_id');
        // echo $alocatedids;
        $delivered_parcels = Parcel::with('allocate_parcel','parcel_tracking', 'parcel_charges',)
            ->where('pl_status', 'delivered')
            ->whereIn('id',$alocatedids)
            ->get();
            // echo($delivered_parcels);
        return $delivered_parcels;
    }
    public function customer_details_list(Request $request)
    {
        // $parcel_shipper_details = Parcel::with('country', 'consignee','parcel_shipper_details')->whereIn('pl_status', ['processed','delivered','allocated'])->get();
        // dd($parcel_shipper_details);
        $customer_ids = ParcelShipper::where('company_name',$request->id)->pluck('pl_id');
        // echo $customer_ids;
        $delivered_parcels = Parcel::with('allocate_parcel','parcel_tracking', 'parcel_charges','parcel_consignee')
            ->where('pl_status', 'delivered')
            ->whereIn('id',$customer_ids)
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

        $dated_data = Parcel::with('parcel_tracking', 'parcel_charges')->whereBetween('created_at', [$start_date, $end_date])->where('pl_status', 'delivered')->get();
        return response()->json($dated_data);
    //    dd($users);

        // return view('admin-panel.report', compact('users'));
    }
}
