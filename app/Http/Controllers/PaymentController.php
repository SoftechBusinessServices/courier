<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Region;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
     //
     public function create_payment_method()
     {
         $data = PaymentMethod::all();
         return view('admin-panel.payments.create_payment_method', compact('data'));
     }
     public function store_payment_method(Request $request)
     {
        //  dd($request->all());
         $request->validate([

             'payment_method' => 'required|unique:payment_methods',
         ]);

         $data = ['payment_method' => $request->payment_method];
         $data = PaymentMethod::create($data);

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
