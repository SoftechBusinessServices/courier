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

     public function edit_payment_method($id)
     {
        // dd(1);
        $record = PaymentMethod::find($id);
        $data = PaymentMethod::all();

        return view('admin-panel.payments.edit_payment_method', compact('data', 'record'));
     }
     public function update_payment_method(Request $request, $id)
     {
        // dd(2);
         $request->validate([
             'payment_method' => 'required',
         ]);

         $record = PaymentMethod::find($id);
         $data = ['payment_method' => $request->payment_method];
         $data = $record->update($data);

         if ($data) {
             return redirect('add-payment-method')->with('success', "Record Updated Successfully");
         } else {
             return redirect()->back()->with('error', "Record Not Updated...");
         }
     }

     public function destroy_payment_method($id)
     {
         $data = PaymentMethod::find($id);
         $data = $data->delete();

         if ($data) {
             return redirect('add-payment-method')->with('success', "Record Deleted");
         } else {
             return redirect()->back()->with('success', "Record Not Deleted");
         }
     }


}
