<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Region;
use App\Models\Company;
use App\Models\Country;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\ShippingCharge;
use App\Models\ParcelRegistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $customers = ShippingCharge::all();
        // dd(1);
        $countries = Country::all();
        $companies = Company::all();
        $currencies = Currency::all();
        return view('admin-panel.master',  compact('data', 'regions', 'charges', 'countries', 'companies', 'currencies','customers'));

        // return view('home');
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

    public function store_user(Request $request){

        // dd($request->all());
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
        ];
        $data = User::create($data);
        if($data){

            return redirect()->back()->with('success',"Record Inserted Successfully");
        }
        else{

            return redirect()->back()->with('error',"Insertion Failed!");
        }
    }
    public function fetch_user(){

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
