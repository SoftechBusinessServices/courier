<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Models\VendorCharges;
use App\Models\VendorIdTracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorTrackingController extends Controller
{
    //
    public function vendor_tracking(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'pl_id' => 'required',
            'selected_vendor_id' => 'required',
            'vendor_tracking_id' => 'required',
        ]);
 
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json(['success' => 0,'errors' => $errors]);
        }
        $data = [
            'pl_id' => $request->pl_id,
            'vendor_id' => $request->selected_vendor_id,
            'vendor_tracking_id' => $request->vendor_tracking_id,
        ];
         $data_id = VendorIdTracking::create($data);
        return response()->json(['success' => 1,'data' => $data_id]);
    }


    public function vendor_tracking_charges(Request $request){

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'pl_id1' => 'required',
            'selected_vendor_id1' => 'required',
            'vendor_charges_id1' => 'required',
        ]);
 
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json(['success' => 0,'errors' => $errors]);
        }
        $data = [
            'pl_id' => $request->pl_id1,
            'vendor_id' => $request->selected_vendor_id1,
            'vendor_tracking_charges' => $request->vendor_charges_id1,
        ];
        $data_id1 = $data = VendorCharges::create($data);
        return response()->json(['success' => 1,'data' => $data_id1]);
       
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
        $record = Parcel::where('id', $id)->first();
        // echo$record;
        $record->pl_status = "delivered";
        $data_updated = $record->update();
        // return response()->json($shipping);
        return response()->json(['success'=>'User status change successfully.']);
    }

    public function changeStatus(Request $request)
    {
        $req = explode('_',$request->status);
        $user = Parcel::find($req[1]);
        $user->pl_status = $req[0];
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function pl_changeStatus(Request $request) { 
    //    dd($request->id);
        $category = Parcel::find($request->id);
        $category->pl_status = $request->status; 
        $category->save(); 
        
        return response()->json(['success'=>' status change successfully.']); }

}
