<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Logistic;
use Illuminate\Http\Request;

class LogisticController extends Controller
{
    //
    public function add_logistic()
    {
        //
        $data = Logistic::all();
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.logistics.create_logistic', compact('data', 'countries'));
    }
    public function store_logistic(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([

            'country_id' => 'required',
            'logistic_name' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $data  = [
            'country_id' => $request->country_id,
            'logistic_name' => $request->logistic_name,
            'vendor_name' => $request->name,
            'vendor_email' => $request->email,
            'vendor_phone' => $request->phone,
            'vendor_address' => $request->address,
        ];

        $data = Logistic::create($data)->id;
        // dd($data);

        if ($data) {

            return redirect('add-logistic')->with('success', "Record Added Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Added...");
        }
    }
    public function edit_logistic($id)
    {
        //
        $data = Logistic::find($id);
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.logistics.edit_logistic', compact('data', 'countries'));
    }
    public function update_logistic(Request $request, $id)
    {
        //
        //   dd($request->all());
          $validatedData = $request->validate([

            'country_id' => 'required',
            'logistic_name' => 'required',
            'vendor_name' => 'required',
            'vendor_email' => 'required',
            'vendor_phone' => 'required',
            'vendor_address' => 'required',

        ]);

        $data  = [
            'country_id' => $request->country_id,
            'logistic_name' => $request->logistic_name,
            'vendor_name' => $request->vendor_name,
            'vendor_email' => $request->vendor_email,
            'vendor_phone' => $request->vendor_phone,
            'vendor_address' => $request->vendor_address,
        ];

        $record = Logistic::find($id);
        // dd($record);

        $data = $record->update($data);
        // dd($data);
        if ($data) {

            return redirect('add-logistic')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_logistic($id)
    {
        $data = Logistic::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
}
