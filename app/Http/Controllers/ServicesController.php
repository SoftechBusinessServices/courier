<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function create_service()
    {

        $data = Service::all();
        return view('admin-panel.services.create_service', compact('data'));
    }

    public function store_service(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'service_name' => 'required|unique:services',
            ]
        );

        $data = [
            'service_name' => $request->service_name,
        ];
        $data = Service::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }

    public function edit_service($id)
    {
        $record = Service::find($id);
        $data = Service::all();
        return view('admin-panel.services.edit_service', compact('data','record'));
    }
    public function update_service(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'service_name' => 'required',
            ]
        );

        $record = Service::find($id);

        $data = [
            'service_name' => $request->service_name,
        ];

        $data = $record->update($data);

        if ($data) {
            return redirect('add-service')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function destroy_service($id)
    {
        $data = Service::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-service')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //restoring a record
    public function restoreservice($id)
    {
        $data =  Service::withTrashed()->find($id)->restore();

        if ($data) {
            return redirect('add-service')->with('error', "Record Restored Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Restored");
        }
    }

    public function service_forceDelete($id)
    {
        $data = Service::withTrashed()->where('id', $id)->forceDelete();
        if ($data) {
            return redirect()->back()->with('error', "Record Permanently Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted...");
        }
    }

    //contents functions are here
    public function create_content()
    {

        $data = Content::all();
        return view('admin-panel.contents.create_content', compact('data'));
    }

    public function store_content(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'name' => 'required|unique:contents',
            ]
        );

        $data = [
            'name' => $request->name,
        ];
        $data = Content::create($data);

        if ($data) {
            return redirect()->back()->with('success', "Record inserted Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not inserted...");
        }
    }

    public function edit_content($id)
    {
        $record = Content::find($id);
        $data = Content::all();
        return view('admin-panel.contents.edit_content', compact('data','record'));
    }
    public function update_content(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate(
            [
                'name' => 'required',
            ]
        );

        $record = Content::find($id);

        $data = [
            'name' => $request->name,
        ];

        $data = $record->update($data);

        if ($data) {
            return redirect('add-content')->with('success', "Record Updated Successfully");
        } else {
            return redirect()->back()->with('error', "Record Not Updated...");
        }
    }

    public function destroy_content($id)
    {
        $data = Content::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-content')->with('success', "Record Deleted");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }

    //restoring a record
    public function restorecontent($id)
    {
        $data =  Content::withTrashed()->find($id)->restore();

        if ($data) {
            return redirect('add-content')->with('error', "Record Restored Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Restored");
        }
    }

   
}
