<?php

namespace App\Http\Controllers;

use App\Models\AllocateParcel;
use App\Models\Country;
use App\Models\Logistic;
use App\Models\Parcel;
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
        $data = $request->validate([
            'logistic_name'          =>  'required',
            'vendor_email'          =>  'required',
            'vendor_phone'          =>  'required',
            'vendor_address'          =>  'required',
            'service_id'                  =>  'required',
        ]);

        for ($i = 0; $i < count($request->service_id); $i++) {
            // dd(24);

            $data = [

                'logistic_name' => $request->logistic_name,
                'vendor_email' => $request->vendor_email,
                'vendor_phone' => $request->vendor_phone,
                'vendor_address' => $request->vendor_address,
                'service_id'  => $request->service_id[$i],

            ];
            $record = Logistic::create($data);

        }
        return redirect()->back()->with('success', "Record inserted Successfully");
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

    public function store_allocate(Request $request)
    {
        // dd($request->all());
        $id = $request->parcell_id;
        // dd($id);

        $request->validate([

            'parcell_id' => 'required',
            'service_used_id' => 'required',
            'vendor_id' => 'required',
            // 'vendor_tracking_id' => 'required',
            // 'vendor_tracking_charges' => 'required',
        ]);

        $data  = [
            'pl_id' => $request->parcell_id,
            'service_id' => $request->service_used_id,
            'vendor_id' => $request->vendor_id,
            // 'vendor_tracking_id' => $request->vendor_tracking_id,
            // 'vendor_tracking_charges' => $request->vendor_tracking_charges,
        ];
        AllocateParcel::create($data);

        $record = Parcel::where('pl_id', $id)->first();
        $record->pl_status = "allocated";
        $data_updated = $record->update();
        // dd($data_updated);
        // dd($data);
        if ($data) {

            return redirect('home')->with('success', "Parcel Allocated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function getSelected($id)
    {
        // dd($id);
        $shipping = Logistic::where('service_id', $id)->get();
        return response()->json($shipping);
    }
}
