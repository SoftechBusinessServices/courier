<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Company;
use App\Models\Country;
use App\Models\Service;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Logistic;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;
use App\Models\ParcelShipper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

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
        $lastParcel =   Parcel::orderBy('created_at', 'desc')->first();

        $parcel = new Parcel();

        if (isset($lastParcel)) {
            // Sum 1 + last id
            // $abc =  $parcel->pl_id = date('Y') . '-' . 'PL-00000' . ($lastParcel->id + 1);
            $abc =  $parcel->pl_id = 'PL-00000' . ($lastParcel->id + 1);
            // $data['pl_id'] = $a;
            // return $abc;
        } else {
            $abc = $parcel->pl_id  = 'PL-000001';
            // $data['pl_id'] = $b;
            // return $abc;
        }

        $data = Parcel::all();
        // dd($data);
        $regions = Region::all();
        $countries = Country::all();
        // $charges = ShippingCharge::all();
        $customers = Customer::all();
        // dd(1);
        $users = User::all();
        $countries = Country::all();
        $companies = Company::all();
        $currencies = Currency::all();
        $services = Service::all();

        DB::enableQueryLog();
        
        // $parcel_shipper_details = Parcel::with('country', 'consignee','parcel_shipper_details')->whereIn('pl_status', ['processed','delivered','allocated'])->get();
        // dd($parcel_shipper_details);
        $shipper_names = ParcelShipper::with('shipper_parcel_details')->get(['id','pl_phone_id','company_name'])->unique('company_name');
        // dd($shipper_names);
        $processed_parcels = Parcel::with('country', 'consignee')->where('pl_status', 'processed')->get();
        // dd($processed_parcels);
        
        $delivered_parcels = Parcel::with('parcel_tracking', 'parcel_charges',)->where('pl_status', 'delivered')->get();
        // dd($delivered_parcels);
        //    dd(DB::getQueryLog());
        // DB::enableQueryLog();
        
        // $processed_parcels = Parcel::with('country','consignee')->where('pl_status', 'processed')->get();
        $allocated_parcels =  Parcel::with(['country', 'parcel_tracking', 'parcel_charges', 'allocate_parcel' => function ($query) {
            $query->with(['service', 'allocate_logistic']);
        }])
            ->whereIn(
                'pl_status',
                ['allocated', 'delivered']
            )
            // ->orWhere('pl_status', 'delivered')
            ->get();
        // dd(DB::getQueryLog());
        // dd($allocated_parcels);



        $logistics = Logistic::all();
        $payment_methods = PaymentMethod::all();
        $vendors =  Logistic::all()->unique('logistic_name');
        // dd($vendors);
        return view('admin-panel.master',  compact('data', 'regions',  'countries', 'companies', 'currencies', 'customers', 'services', 'abc', 'processed_parcels', 'allocated_parcels', 'logistics', 'payment_methods', 'users', 'vendors', 'delivered_parcels','shipper_names'));

        // return view('home');
    }

    public function theme_view(){
        return view('front-panel.index');
    }

    public function dailyReport(Request $request)
    {
        $start_date = Carbon::parse($request->start_date)
            ->toDateTimeString();

        $end_date = Carbon::parse($request->end_date)
            ->toDateTimeString();

        $users = Parcel::whereBetween('created_at', [$start_date, $end_date])->where('pl_status', 'delivered')->get();
     
        return $users;
    //    dd($users);

        // return view('admin-panel.report', compact('users'));
    }


    
    public function update_user(Request $request, $id)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
        ]);

        $record = User::find($id);

        $data = [
            'name'  => $request->name,
            'email'  => $request->email,
        ];

        $record->update($data);

        return redirect()->back()->with('success', "Profile updated Successfully!");
    }

    public function profile($id)
    {
        // dd(1);
        $data = User::find($id);
        return view('admin-panel.users.profile', compact('data'));
    }

    public function showChangePasswordGet()
    {
        return view('auth.passwords.change-password');
    }

    public function changePasswordPost(Request $request)
    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "Your New password does not same as Confirm password.");
        }


        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData) {
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
            return redirect()->back()->with("success", "Password successfully changed!");
        } else {
            return redirect()->back()->with("error", "Your New password does not same as Confirm password.");
        }
    }

    public function store_user(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
        $data = User::create($data);
        if ($data) {

            return redirect()->back()->with('success', "Record Inserted Successfully");
        } else {

            return redirect()->back()->with('error', "Insertion Failed!");
        }
    }
    public function fetch_user()
    {

        $data = User::all();
        return view('admin-panel.users.fetch_user', compact('data'));
    }
    public function destroy_user($id)
    {
        dd($id);
        $data = User::find($id);
        $data = $data->delete();

        if ($data) {
            return redirect('add-user')->with('error', "Record Deleted Successfully");
        } else {
            return redirect()->back()->with('success', "Record Not Deleted");
        }
    }
}
