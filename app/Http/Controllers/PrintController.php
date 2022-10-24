<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Models\Region;
use App\Models\Company;
use App\Models\Content;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;
use App\Http\Controllers\Controller;

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
    public function dispatch_notes_print_view($id)
    {
        // dd(1);
        // $data = Parcel::with('consignee','parcel_notes')->find($id);
        $data = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_shipper'=>function($query){
            $query->with('shipper_with_country');

        } ,'parcel_with_consignee'=>function($query){
            $query->with('consignee_with_country');

        },'parcel_with_notes'=>function($query){
            $query->with('notes_with_currency');

        }])->find($id);
       
        // dd($data);
        $description = Content::whereIn('id',$data->pl_description)->get()->pluck('name')->toArray();
        $pl_description =$data->description = implode('+', $description);

        return view('admin-panel.prints.dispatch_notes_print_view', compact('data','pl_description'));
    }
    public function customer_receipt_print_view($id)
    {
        // dd(1);
        $data = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_shipper'=>function($query){
            $query->with('shipper_with_country');

        } ,'parcel_with_consignee'=>function($query){
            $query->with('consignee_with_country');

        },'parcel_with_notes'=>function($query){
            $query->with('notes_with_currency');

        }])->find($id);
        // dd($data);
        $description = Content::whereIn('id',$data->pl_description)->get()->pluck('name')->toArray();
        $pl_description =$data->description = implode('+', $description);
      
        return view('admin-panel.prints.customer_receipt_print_view', compact('data','pl_description'));
    }


}
