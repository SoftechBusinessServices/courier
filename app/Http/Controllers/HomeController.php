<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Company;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = ParcelRegistration::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        $charges = ShippingCharge::all();
        // dd(1);
        $countries = Country::all();
        $companies = Company::all();
        $currencies = Currency::all();
        return view('admin-panel.master',  compact('data', 'regions', 'charges', 'countries','companies','currencies'));

        // return view('home');
    }
}
