<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    //Country functions
    public function add_country()
    {
        $data = Country::all();
        $regions  = Region::all();
        return view('admin-panel.countries.create_country', compact('data', 'regions'));
    }
    public function store_country(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'region_id' => 'required',
                'name' => 'required|unique:countries',
                'code' => 'required'
            ]
        );

        $data = [
            'region_id' => $request->region_id,
            'name' => $request->name,
            'code' => $request->code
        ];
        $data = Country::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }

    public function edit_country($id)
    {

        $data = Country::find($id);
        $regions  = Region::all();
        return view('admin-panel.countries.edit_country', compact('data', 'regions'));
    }
    public function update_country(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'region_id' => 'required',
                'name' => 'required|unique:countries',
                'code' => 'required'
            ]
        );

        $record = Country::find($id);
        $data = [
            'region_id' => $request->region_id,
            'name' => $request->name,
            'code' => $request->code
        ];

        $data = $record->update($data);

        if ($data) {
            return redirect('add-country')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function destroy_country($id)
    {
        $data = Country::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-country')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //restoring a record
    public function restorecountry($id)
    {
        $data =  Country::withTrashed()->find($id)->restore();

        if ($data) {
            return redirect('add-country')->with('error', "Record Restored Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Restored");
        }
    }

    public function country_forceDelete($id)
    {
        $data = Country::withTrashed()->where('id', $id)->forceDelete();
        if ($data) {
            return redirect()->back()->with('error', "Record Permanently Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
}