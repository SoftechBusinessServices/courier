<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\ParcelRegistration;
use App\Models\Region;
use App\Models\ShippingCharge;

class ParcelRegistrationController extends Controller
{
    //
    public function add_parcel()
    {
        $data = ParcelRegistration::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.parcels.create_parcel', compact('data', 'regions', 'charges', 'countries'));
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

        $lastParcel =   ParcelRegistration::orderBy('created_at', 'desc')->first();

        $parcel = new ParcelRegistration();

        if (isset($lastParcel)) {
            // Sum 1 + last id
            $a =  $parcel->pl_id = date('Y') . '-' . 'PL-00000' . ($lastParcel->id + 1);
            $data['pl_id'] = $a;
        } else {
            $b = $parcel->pl_id  = date('Y') . '-' . 'PL-000001';
            $data['pl_id'] = $b;
        }
        $data = ParcelRegistration::create($data);
        // dd($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted ---");
        }
    }
    public function edit_parcel($id)
    {
        // dd($id);
        $data = ParcelRegistration::find($id);
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.parcels.edit_parcel', compact('data', 'countries'));
    }
    public function update_parcel(Request $request, $id)
    {
        // dd($request->all());
        $parcel = ParcelRegistration::find($id);
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

        $data = ParcelRegistration::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
}