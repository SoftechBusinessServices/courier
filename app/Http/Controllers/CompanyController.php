<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyRepresentative;
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

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'ntn_no' => 'required',
            'web_url' => 'required',
        ]);

        $data  = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'address' => $request->address,
            'ntn_no' => $request->ntn_no,
            'web_url' => $request->web_url,
        ];

        $company_id = Company::create($data)->id;
        // dd($company_id);

        if($request->answer == "yes"){
            // dd(1);
        $represent = [
             'company_id'=> $company_id,
            'represent_name'=> $request->represent_name,
            'represent_email'=> $request->represent_email,
            'represent_phone'=> $request->represent_phone,
            'represent_address'=> $request->represent_address,
        ];
        $represent = CompanyRepresentative::create($represent)->id;

        if($represent){
            return redirect()->back()->with('success', "Company with Representative added Successfully");
        }

        }  //representative
        else{
            if ($company_id) {
                return redirect()->back()->with('success', "Company added Successfully");
            }
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

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
            'address' => 'required',
            'ntn_no' => 'required',
            'web_url' => 'required',
        ]);

        $data  = [
            'fname' => $request->fname,
            'lname' => $request->lname,
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

    public function fetch_representative($id = NULL)
    {
        // dd($id);
        $data = CompanyRepresentative::where('company_id', $id)->get();
        // dd($data);

        return view('admin-panel.companies.fetch_representative', compact('data'));
    }

}
