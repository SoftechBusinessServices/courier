<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;
use App\Http\Controllers\Controller;

class PrintController extends Controller
{
    //
    public function prnpriview()
    {
        $data = ParcelRegistration::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.parcels.print_parcel', compact('data', 'regions', 'charges', 'countries'));
    }
    public function print_view()
    {
        $data = ShippingCharge::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.print_view', compact('data', 'regions', 'charges', 'countries'));
    }
}
