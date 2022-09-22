<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyRepresentative;
use App\Models\Country;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    //
    public function add_representator()
    {
        //
        $data = CompanyRepresentative::all();
        $countries = Country::all();
        // dd($data);
        return view('admin-panel.companies.create_representative', compact('data', 'countries'));
    }
    public function store_representator(Request $request)
    {
        //
        // dd($request->all());
        $validatedData = $request->validate([

            'company_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $data  = [
            'company_id' => $request->company_id,
            'represent_name' => $request->name,
            'represent_email' => $request->email,
            'represent_phone' => $request->phone,
            'represent_address' => $request->address,
        ];

        $data = CompanyRepresentative::create($data)->id;
        // dd($data);

        if ($data) {

            return redirect('add-representator')->with('success', "Record Added Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Added...");
        }
    }
    public function edit_representator($id)
    {
        //
        // dd($id);
        $data = CompanyRepresentative::find($id);
        $companies = Company::all();
        // dd($data);
        return view('admin-panel.companies.edit_representative', compact('data', 'companies'));
    }

    public function update_representator(Request $request, $id)
    {
        //
        // dd($request->all());
        $validatedData = $request->validate([

            'company_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

        $data  = [
            'company_id' => $request->company_id,
            'represent_name' => $request->name,
            'represent_email' => $request->email,
            'represent_phone' => $request->phone,
            'represent_address' => $request->address,
        ];

        $record = CompanyRepresentative::find($id);
        // dd($record);

        $data = $record->update($data);
        // dd($data);
        if ($data) {

            return redirect('add-representator')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }
    public function destroy_representator($id)
    {
        //
        $data = CompanyRepresentative::find($id);
        // dd($data);
        $data = $data->delete();

        if ($data) {
            return redirect()->back()->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }

}
