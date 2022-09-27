<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function create_service()
    {
        // dd($id);
        $data = Service::all();
        // dd($data);
        // $region  = Region::find($id);
        return view('admin-panel.services.create_service', compact('data'));
    }
    // public function add_country($id)
    // {
    //     dd(1);
    //     $data = Country::all();
    //     $regions  = Region::all();
    //     return view('admin-panel.countries.create_country', compact('data', 'regions'));
    // }
    public function store_country(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'region_id' => 'required',
                'name' => 'required|unique:countries',
                // 'code' => 'required'
            ]
        );

        $data = [
            'region_id' => $request->region_id,
            'name' => $request->name,
            // 'code' => $request->code
        ];
        $data = Country::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }
}
