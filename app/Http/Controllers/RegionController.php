<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Region;
use App\Models\ShippingCharge;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class RegionController extends Controller
{
    //
    public function add_region()
    {
        $data = Region::all();
        return view('admin-panel.regions.create_region', compact('data'));
    }
    public function store_region(Request $request)
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
    public function update_region(Request $request, $id)
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

    public function destroy_region($id)
    {
        $data = Region::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-region')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //restoring a record
    public function restoreregion($id)
    {
        $data =  Region::withTrashed()->find($id)->restore();

        if ($data) {
            return redirect('add-category')->with('error', "Record Restored Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Restored");
        }
    }

    public function region_forceDelete($id)
    {
        $data = Region::withTrashed()->where('id', $id)->forceDelete();
        if ($data) {
            return redirect()->back()->with('error', "Record Permanently Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }
    public function fetch_region($id = NULL)
    {

        $data = Country::where('region_id', $id)->get();
        // dd($data);

        return view('admin-panel.regions.fetch_region', compact('data'));
    }

    public function destroy($id)
    {
        Region::find($id)->delete();
        return back()->with('success', 'Region deleted successfully');
    }
}
