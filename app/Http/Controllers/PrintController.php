<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Country;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Currency;
use App\Models\Parcel;

class PrintController extends Controller
{
    //
    public function prnpriview()
    {
        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.parcels.print_parcel', compact('data', 'regions',  'countries'));
    }
    public function parcels_print_view()
    {
        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.parcels_print_view', compact('data', 'regions',  'countries'));
    }
    public function charges_print_view()
    {
        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.charges_print_view', compact('data', 'regions',  'countries'));
    }
    public function customers_print_view()
    {
        $data = Customer::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.customers_print_view', compact('data', 'regions', 'countries'));
    }

    public function companies_print_view()
    {
        $data = Company::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.companies_print_view', compact('data', 'regions', 'countries'));
    }
    public function regions_print_view()
    {
        $data = Region::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.regions_print_view', compact('data', 'regions',  'countries'));
    }
    public function countries_print_view()
    {
        $data = Country::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.countries_print_view', compact('data', 'regions','countries'));
    }
    public function currencies_print_view()
    {
        $data = Currency::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.currencies_print_view', compact('data', 'regions','countries'));
    }
    public function dispatch_notes_print_view()
    {
        $data = Currency::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.dispatch_notes_print_view', compact('data', 'regions',  'countries'));
    }
    public function customer_receipt_print_view()
    {
        $data = Currency::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        // dd($charges);
        return view('admin-panel.prints.currencies_print_view', compact('data', 'regions',  'countries'));
    }


}
