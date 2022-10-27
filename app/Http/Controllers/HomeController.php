<?php

namespace App\Http\Controllers;

use App\Models\AllocateParcel;
use App\Models\User;
use App\Models\Parcel;
use App\Models\Region;
use App\Models\Company;
use App\Models\ContactUs;
use App\Models\Content;
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
use Illuminate\Support\Facades\Redirect;

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
            $abc =  $parcel->pl_id = 'PL00000' . ($lastParcel->id + 1);
            // $data['pl_id'] = $a;
            // return $abc;
        } else {
            $abc = $parcel->pl_id  = 'PL000001';
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

        $customers = ParcelShipper::get();
        // dd($customers);

        $processed_parcels = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_shipper'=>function($query){
            $query->with('shipper_with_country');
        } ,'parcel_with_consignee'=>function($query){
            $query->with('consignee_with_country');
        }])
        ->where('pl_status', 'processed')->get();
        // dd($processed_parcels);
        
        $delivered_parcels = Parcel::with('parcel_with_tracking', 'parcel_with_charges')->where('pl_status', 'delivered')->get();
        // dd($delivered_parcels);
        // dd(DB::getQueryLog());
        // DB::enableQueryLog();
        $logistics = Logistic::all();
        $payment_methods = PaymentMethod::all();
        $vendors =  Logistic::with('logistic_with_company')->get();
        // dd($vendors);
        $companies = Company::get();
        // dd($companies);

        $allocated_parcels = AllocateParcel::with([
            'allocate_with_service',
            'allocate_with_logistic',
            'allocate_with_parcel' => function ($query){
                $query->with([ 'parcel_with_tracking','parcel_with_charges','parcel_with_consignee' => function($query){
                    $query->with('consignee_with_country');
                },]);
            },
        ]) ->get();
      
        $contents = Content::all();

        return view('admin-panel.master',  compact('data','contents', 'regions',  'countries', 'companies', 'currencies', 'customers', 'services', 'abc', 'processed_parcels', 'allocated_parcels', 'logistics', 'payment_methods', 'users', 'vendors', 'delivered_parcels', 'customers'));

        // return view('home');
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
        // dd($request->all());
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

    public function contact_us(Request $request)
    {

        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required'
            ]
        );
        // dd(2);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        $data = ContactUs::create($data);
        if ($data) {
            return redirect()->back()->with('success', "Your Message has been Sent, We will Contact you Soon!");
        }
    }


    public function search_tracking_id(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $products = DB::table('parcels')->where('pl_id', 'LIKE', '%' . $request->search . "%")->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>' .
                        '<td>' . $product->id . '</td>' .
                        '<td>' . $product->pl_id . '</td>' .
                        '<td>' . $product->pl_final . '</td>' .
                        '<td>' . $product->pl_status . '</td>' .
                        '</tr>';
                }
                return Response($output);
            }
        }
    }


}
