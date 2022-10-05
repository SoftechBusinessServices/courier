<?php

namespace App\Http\Controllers;

use App\Models\VendorCharges;
use App\Models\VendorTracking;
use Illuminate\Http\Request;

class VendorTrackingController extends Controller
{
    //
    public function vendor_tracking(Request $request){

        // dd($request->all());
        $request->validate([
            'parcell_idd' => 'required',
            'tracking_idd' => 'required',
        ]);
        $data = [
            'pl_id' => $request->parcell_idd,
            'vendor_tracking_id' => $request->tracking_idd,
        ];
         $data = VendorTracking::create($data);

         return redirect()->back()->with('success',"Vendor Tracking ID has been assigned.");
    }
}
