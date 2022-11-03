<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CountryController extends Controller
{

    public function create_country($id)
    {
        // dd($id);
        $data = Country::where('region_id', $id)->get();
        // dd($data);
        $region  = Region::find($id);
        return view('admin-panel.countries.create_country1', compact('data', 'region'));
    }
    public function add_country($id=null)
    {
        // dd(1);
        $data = Country::all();
        $regions  = Region::all();
        return view('admin-panel.countries.create_country', compact('data', 'regions'));
    }
    public function store_country(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'region_id' => 'required',
            'addMoreInputFields.*.country_name' => 'required'
        ]);


        foreach ($request->addMoreInputFields as $key => $value) {

            $form_data = array(
                'region_id'  =>  $request->region_id,
                'name'  =>  $value['country_name'],
            );

            Country::create($form_data);

        }

        return back()->with('success', 'New Country has been added.');
        // $validatedData = $request->validate(
        //     [
        //         'region_id' => 'required',
        //         'name' => 'required|unique:countries',
        //         // 'code' => 'required'
        //     ]
        // );

        // $data = [
        //     'region_id' => $request->region_id,
        //     'name' => $request->name,
        //     // 'code' => $request->code
        // ];
        // $data = Country::create($data);

        // if ($data) {
        //     return redirect()->back()->with('success', "Record inserted Successfully");
        // } else {
        //     return redirect()->back()->with('error', "Record Not inserted...");
        // }
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
                'name' => 'required',
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
        // dd($id);
        $data = Country::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('success', "Record Deleted");
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
