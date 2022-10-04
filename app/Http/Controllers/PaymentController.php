<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
     //
     public function add_payment_method()
     {
         $data = Region::all();
         return view('admin-panel.regions.create_region', compact('data'));
     }
     public function store_payment_method(Request $request)
     {
         // dd($request->all());
         $request->validate([

             'name' => 'required|unique:regions',
         ]);

         $data = ['name' => $request->name];
         $data = Region::create($data);

         if ($data) {
             return redirect()->back()->with('success', "Record inserted Successfully");
         } else {
             return redirect()->back()->with('error', "Record Not inserted...");
         }
     }

     public function edit_region($id)
     {

         $record = Region::find($id);
         $data = Region::all();

         return view('admin-panel.regions.edit_region', compact('data', 'record'));
     }
     public function update_payment_method(Request $request, $id)
     {

         $request->validate([
             'name' => 'required',
         ]);

         $record = Region::find($id);
         $data = ['name' => $request->name];
         $data = $record->update($data);

         if ($data) {
             return redirect('add-region')->with('success', "Record Updated Successfully");
         } else {
             return redirect()->back()->with('error', "Record Not Updated...");
         }
     }

     public function destroy_payment_method($id)
     {
         $data = Region::find($id);
         $data = $data->delete();

         if ($data) {
             return redirect('add-region')->with('success', "Record Deleted");
         } else {
             return redirect()->back()->with('success', "Record Not Deleted");
         }
     }


}
