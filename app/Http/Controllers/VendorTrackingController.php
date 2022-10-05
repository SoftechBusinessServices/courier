<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Models\VendorCharges;
use App\Models\VendorIdTracking;
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
         $data =VendorIdTracking::create($data);

         return redirect()->back()->with('success',"Vendor Tracking ID has been assigned.");
    }
    public function vendor_tracking_charges(Request $request){

        // dd($request->all());
        $request->validate([
            'parcell_iddd' => 'required',
            'vendor_charges' => 'required',
        ]);
        $data = [
            'pl_id' => $request->parcell_iddd,
            'vendor_tracking_charges' => $request->vendor_charges,
        ];
         $data = VendorIdTracking::create($data);

         return redirect()->back()->with('success',"Vendor Charges has been Updated.");
    }

    public function changeUserStatus(Request $request)
    {
        $user = Parcel::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'User status change successfully.']);
    }

    public function getDeliveredStatus($id){
        // dd($id);
        $record = Parcel::where('pl_id', $id)->first();
        $record->pl_status = "delivered";
        $data_updated = $record->update();
        // return response()->json($shipping);
        return response()->json(['success'=>'User status change successfully.']);
    }


}
