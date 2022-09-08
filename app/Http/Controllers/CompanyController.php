<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function add_company()
    {
        $data = Company::all();
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.companies.create_company', compact('data', 'countries'));
    }
    public function store_company(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'ntn_no' => 'required',
            'web_url' => 'required',
        ]);

        $data  = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'ntn_no' => $request->ntn_no,
            'web_url' => $request->web_url,
        ];

        $data = Company::create($data);
        // dd($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted ---");
        }
    }
    public function edit_company($id)
    {
        // dd($id);
        $data = Company::find($id);
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.companies.edit_company', compact('data', 'countries'));
    }
    public function update_company(Request $request, $id)
    {
        // dd($request->all());
        $record = Company::find($id);
        // dd($record);
        $validatedData = $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'ntn_no' => 'required',
            'web_url' => 'required',
        ]);

        $data  = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'ntn_no' => $request->ntn_no,
            'web_url' => $request->web_url,
        ];
        $data = $record->update($data);
        // dd($data);
        if ($data) {

            return redirect('add-company')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_company($id)
    {

        $data = Company::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
}