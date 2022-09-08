<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Currency;
use App\Models\Region;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;

class ShippingChargesController extends Controller
{
    //
    public function add_charges()
    {
        $data = ShippingCharge::all();
        $countries = Country::all();
        $currencies = Currency::all();
        // dd($data);
        return view('admin-panel.charges.create_charges', compact('data', 'countries', 'currencies'));
    }

    //ajax dependent Country selection
    public function getSelected($id)
    {
        $shipping = Country::find($id);
        // Country::where(function($query){
        //     $query->where('id' , 2);
        // })->get();
        $regions = Region::all();
        $regions_select = "";
        foreach($regions as $region){
            $selected = "";
            if($shipping->region_id == $region->id)
               $selected = "selected='selected'";
               $regions_select .= "<option $selected value=".$region->id.">".$region->name."</option>";
        }
        // $shipping = Country::with(['region' => function($query) use ($id) {
        //     $query->where('id' , $id);
        // }])->get();
        // return response()->json($shipping[0]);
        echo $regions_select;
    }

    //ajax dependent Country selection
    public function getCurrency($id)
    {
        $shipping = Currency::where('id', $id)->get();
        return response()->json($shipping);
    }


    public function store_charges(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'region_id' => 'required',
            'country_id' => 'required',
            'currency_id' => 'required',
            'symbol' => 'required',
            'gm0_500' => 'required',
            'gm501_1000' => 'required',
            'gm1001_1500' => 'required',
            'gm1501_2000' => 'required',
            'gm2001_5000' => 'required',
            'gm5000_above' => 'required',
        ]);

        $data  = [
            'region_id' => $request->region_id,
            'country_id' => $request->country_id,
            'currency_id' => $request->currency_id,
            'symbol' => $request->symbol,
            'gm0_500' => $request->gm0_500,
            'gm501_1000' => $request->gm501_1000,
            'gm1001_1500' => $request->gm1001_1500,
            'gm1501_2000' => $request->gm1501_2000,
            'gm2001_5000' => $request->gm2001_5000,
            'gm5000_above' => $request->gm5000_above,
        ];

        $data = ShippingCharge::create($data);
        // dd($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted ---");
        }
    }
    public function edit_charges($id)
    {
        // dd($id);
        $data = ShippingCharge::find($id);
        $regions = Region::all();
        $currencies = Currency::all();
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.charges.edit_charges', compact('data', 'regions', 'currencies', 'countries'));
    }
    public function update_charges(Request $request, $id)
    {
        // dd($request->all());
        $record = ShippingCharge::find($id);
        // dd($record);
        $request->validate([

            'region_id' => 'required',
            'country_id' => 'required',
            'currency_id' => 'required',
            'symbol' => 'required',
            'gm0_500' => 'required',
            'gm501_1000' => 'required',
            'gm1001_1500' => 'required',
            'gm1501_2000' => 'required',
            'gm2001_5000' => 'required',
            'gm5000_above' => 'required',
        ]);

        $data  = [
            'region_id' => $request->region_id,
            'country_id' => $request->country_id,
            'currency_id' => $request->currency_id,
            'symbol' => $request->symbol,
            'gm0_500' => $request->gm0_500,
            'gm501_1000' => $request->gm501_1000,
            'gm1001_1500' => $request->gm1001_1500,
            'gm1501_2000' => $request->gm1501_2000,
            'gm2001_5000' => $request->gm2001_5000,
            'gm5000_above' => $request->gm5000_above,
        ];


        $data = $record->update($data);
        // dd($data);
        if ($data) {

            return redirect('add-charges')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_charges($id)
    {

        $data = ShippingCharge::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
    //Currency functions
    public function add_currency()
    {
        $data = Currency::all();
        return view('admin-panel.charges.create_currency', compact('data'));
    }
    public function store_currency(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:currencies',
                'symbol' => 'required'
            ]
        );

        $data = [
            'name' => $request->name,
            'symbol' => $request->symbol
        ];
        $data = Currency::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }

    public function edit_currency($id)
    {

        $data = Currency::find($id);

        return view('admin-panel.charges.edit_currency', compact('data'));
    }
    public function update_currency(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'symbol' => 'required'
            ]
        );
        // dd(1);
        $record = Currency::find($id);
        $data = [
            'name' => $request->name,
            'symbol' => $request->symbol
        ];
        $data = $record->update($data);

        if ($data) {
            return redirect('add-currency')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function destroy_currency($id)
    {
        $data = Currency::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-currency')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //restoring a record
    public function restorecurrency($id)
    {
        $data =  Currency::withTrashed()->find($id)->restore();

        if ($data) {
            return redirect('add-currency')->with('error', "Record Restored Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Restored");
        }
    }

    public function currency_forceDelete($id)
    {
        $data = Currency::withTrashed()->where('id', $id)->forceDelete();
        if ($data) {
            return redirect()->back()->with('error', "Record Permanently Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }

    //
}