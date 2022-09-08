<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function add_customer()
    {
        $data = Customer::all();
        $countries = Country::all();
        $companies = Company::all();
        // dd($data);
        return view('admin-panel.customers.create_customer', compact('data','countries','companies'));
    }
    public function store_customer(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([

            'company_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'cnic_no' => 'required',
            'cnic_scane' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data  = [

            'company_id' => $request->company_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'cnic_no' => $request->cnic_no,
        ];

        if ($request->hasFile('cnic_scane')) {

            $imageName = time() . '.' . $request->cnic_scane->extension();
            $request->cnic_scane->move(public_path('uploads/customers/cnic/'), $imageName);
            $data['cnic_scane'] = $imageName;
        }

        $data = Customer::create($data);
        // dd($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted ---");
        }
    }
    public function edit_customer($id)
    {
        // dd($id);
        $data = Customer::find($id);
        // dd($data);
        $countries = Country::all();
        $companies = Company::all();

        return view('admin-panel.customers.edit_customer', compact('data', 'countries','companies'));
    }
    public function update_customer(Request $request, $id)
    {
        // dd($request->all());
        $record = Customer::find($id);
        // dd($product);
        $validatedData = $request->validate([

            'company_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'cnic_no' => 'required',
            'cnic_scane' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data  = [

            'company_id' => $request->company_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'cnic_no' => $request->cnic_no,
        ];

        if ($request->hasFile('cnic_scane')) {

            $imageName = time() . '.' . $request->cnic_scane->extension();
            $request->cnic_scane->move(public_path('uploads/customers/cnic/'), $imageName);
            $data['cnic_scane'] = $imageName;
        } else {

            unset($request->image);
        }

        $data = $record->update($data);
        // dd($data);

        if ($data) {

            return redirect('add-customer')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_customer($id)
    {

        $data = Customer::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
}