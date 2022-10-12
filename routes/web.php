<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\ShippingChargesController;
use App\Http\Controllers\ParcelRegistrationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RepresentativeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VendorTrackingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/theme', [App\Http\Controllers\HomeController::class, 'theme_view'])->name('theme');

//Users Routes
Route::get('add-user/',[HomeController::class,'fetch_user'])->name('add-user');
Route::post('store-user/',[HomeController::class,'store_user'])->name('store-user');
Route::get('edit-user/',[HomeController::class,'edit_user'])->name('edit-user');
Route::get('fetch-user/',[HomeController::class,'fetch_user'])->name('fetch-user');
Route::get('delete-user/{id}',[HomeController::class,'destroy_user'])->name('delete-user');


//Company Routes
Route::get('/add-company', [CompanyController::class, 'add_company'])->name('add-company');
Route::post('/store-company', [CompanyController::class, 'store_company'])->name('store-company');
Route::get('edit-company/{id}', [CompanyController::class, 'edit_company']);
Route::post('update-company/{id}', [CompanyController::class, 'update_company']);
Route::get('delete-company/{id}', [CompanyController::class, 'destroy_company'])->name('delete-company');

//Customer Routes
Route::get('/add-customer', [CustomerController::class, 'add_customer'])->name('add-customer');
Route::post('/store-customer', [CustomerController::class, 'store_customer'])->name('store-customer');
Route::get('edit-customer/{id}', [CustomerController::class, 'edit_customer']);
Route::post('update-customer/{id}', [CustomerController::class, 'update_customer']);
Route::get('delete-customer/{id}', [CustomerController::class, 'destroy_customer'])->name('delete-customer');

//Parcel Routes
Route::get('/add-parcel', [ParcelController::class, 'add_parcel'])->name('add-parcel');
Route::post('/store-parcel', [ParcelController::class, 'store_parcel'])->name('store-parcel');
Route::get('edit-parcel/{id}', [ParcelController::class, 'edit_parcel']);
Route::post('update-parcel/{id}', [ParcelController::class, 'update_parcel']);
Route::get('delete-parcel/{id}', [ParcelController::class, 'destroy_parcel'])->name('delete-parcel');
Route::get('parcel-details/{id}', [ParcelController::class, 'parcel_details'])->name('parcel-details');

//ajax dependent
// Route::get('getSelected/{id}', [ShippingChargesController::class, 'getSelected']);
// Route::get('getCurrency/{id}', [ShippingChargesController::class, 'getCurrency']);
Route::get('getSelectedShipping/{id}', [ParcelController::class, 'getSelectedShipping']);

Route::get('getCompany/{id}', [CompanyController::class, 'getCompany']);

//region Routes
Route::get('add-region', [RegionController::class, 'add_region'])->name('add-region');
Route::post('store-region', [RegionController::class, 'store_region'])->name('store-region');
Route::get('delete-region/{id}', [RegionController::class, 'destroy_region'])->name('delete-region');
Route::get('edit-region/{id}', [RegionController::class, 'edit_region']);
Route::post('update-region/{id}', [RegionController::class, 'update_region']);
Route::get('delete-region/{id}', [RegionController::class, 'destroy_region'])->name('delete-region');
Route::get('restore-region/{id}', [RegionController::class, 'restoreregion'])->name('restore-region');
Route::get('region-forceDelete/{id}', [RegionController::class, 'region_forceDelete'])->name('region-forceDelete');
Route::get('fetch-region/{id}', [RegionController::class, 'fetch_region'])->name('fetch-region');

//Currency Charges
Route::get('add-currency', [ShippingChargesController::class, 'add_currency'])->name('add-currency');
Route::post('store-currency', [ShippingChargesController::class, 'store_currency'])->name('store-currency');
Route::get('delete-currency/{id}', [ShippingChargesController::class, 'destroy_currency'])->name('delete-currency');
Route::get('edit-currency/{id}', [ShippingChargesController::class, 'edit_currency']);
Route::post('update-currency/{id}', [ShippingChargesController::class, 'update_currency']);
Route::get('delete-currency/{id}', [ShippingChargesController::class, 'destroy_currency'])->name('delete-currency');
Route::get('restore-currency/{id}', [ShippingChargesController::class, 'restorecurrency'])->name('restore-currency');
Route::get('currency-forceDelete/{id}', [ShippingChargesControllers::class, 'currency_forceDelete'])->name('currency-forceDelete');

//Currency Charges
Route::get('create-country/{id}', [CountryController::class, 'create_country'])->name('create_country');
Route::get('add-country', [CountryController::class, 'add_country'])->name('add-country');
Route::post('store-country', [CountryController::class, 'store_country'])->name('store-country');
Route::get('delete-country/{id}', [CountryController::class, 'destroy_country'])->name('delete-country');
Route::get('edit-country/{id}', [CountryController::class, 'edit_country']);
Route::post('update-country/{id}', [CountryController::class, 'update_country']);
Route::get('delete-country/{id}', [CountryController::class, 'destroy_country'])->name('delete-country');
Route::get('restore-country/{id}', [CountryController::class, 'restorecountry'])->name('restore-country');
Route::get('country-forceDelete/{id}', [CountryController::class, 'country_forceDelete'])->name('currency-country');

//Logistic Registration
Route::get('/add-logistic', [LogisticController::class, 'add_logistic'])->name('add-logistic');
Route::post('/store-logistic', [LogisticController::class, 'store_logistic'])->name('store-logistic');
Route::get('edit-logistic/{id}', [LogisticController::class, 'edit_logistic']);
Route::post('update-logistic/{id}', [LogisticController::class, 'update_logistic']);
Route::get('delete-logistic/{id}', [LogisticController::class, 'destroy_logistic'])->name('delete-logistic');

//Print Previews
Route::get('/prnpriview', [PrintController::class, 'prnpriview']);
Route::get('/charges-print-view', [PrintController::class, 'charges_print_view']);
Route::get('/parcels-print-view', [PrintController::class, 'parcels_print_view']);
Route::get('/customers-print-view', [PrintController::class, 'customers_print_view']);
Route::get('/companies-print-view', [PrintController::class, 'companies_print_view']);
Route::get('/regions-print-view', [PrintController::class, 'regions_print_view']);
Route::get('/countries-print-view', [PrintController::class, 'countries_print_view']);
Route::get('/currencies-print-view', [PrintController::class, 'currencies_print_view']);
Route::get('/dispatch-notes-print-view/{id}', [PrintController::class, 'dispatch_notes_print_view']);
Route::get('/customer-receipt-print-view/{id}', [PrintController::class, 'customer_receipt_print_view']);

Route::get('report', [ReportController::class, 'index'])->name('report');


Route::post('update-user/{id}', [HomeController::class, 'update_user']);
Route::get('profile/{id}', [HomeController::class, 'profile']);
Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

Route::get('region/delete/{id}', [RegionController::class, 'destroy']);


Route::get('add-service/',[ServicesController::class,'create_service'])->name('add-service');
Route::post('store-service/',[ServicesController::class,'store_service'])->name('store-service');
Route::get('edit-service/{id}', [ServicesController::class, 'edit_service']);
Route::post('update-service/{id}', [ServicesController::class, 'update_service']);
Route::get('delete-service/{id}', [ServicesController::class, 'destroy_service'])->name('delete-service');
Route::get('restore-service/{id}', [ServicesController::class, 'restoreservice'])->name('restore-service');
Route::get('service-forceDelete/{id}', [ServicesController::class, 'service_forceDelete'])->name('service-forceDelete');

Route::post('store-testing/',[TestController::class,'store_testing'])->name('store-testing');
Route::get('search', [Select2SearchController::class,'index']);
Route::get('ajax-autocomplete-search', [Select2SearchController::class,'selectSearch']);

Route::get('add-payment-method/',[PaymentController::class,'create_payment_method'])->name('add-payment-method');
Route::post('store-payment-method/',[PaymentController::class,'store_payment_method'])->name('store-payment-method');
Route::get('edit-payment-method/{id}',[PaymentController::class,'edit_payment_method'])->name('edit-payment-method');
Route::get('fetch-payment-method/',[PaymentController::class,'fetch_payment_method'])->name('fetch-payment-method');
Route::post('update-payment-method/{id}',[PaymentController::class,'update_payment_method'])->name('update-payment-method');
Route::get('delete-payment-method/{id}',[PaymentController::class,'destroy_payment_method'])->name('delete-payment-method');

Route::post('store-allocate',[LogisticController::class,'store_allocate'])->name('store-allocate');
Route::get('getSelected/{id}', [LogisticController::class, 'getSelected']);
Route::get('search', [ParcelController::class, 'search']);
// Route::get('getNumberSearch/{id}', [ParcelController::class, 'getNumberSearch']);

Route::post('vendor-tracking',[VendorTrackingController::class,'vendor_tracking'])->name('vendor-tracking');
Route::post('vendor-tracking-charges',[VendorTrackingController::class,'vendor_tracking_charges'])->name('vendor-tracking-charges');
Route::get('changeStatus',[VendorTrackingController::class,'changeUserStatus'])->name('changeStatus');

Route::get('getDeliveredStatus/{id}', [VendorTrackingController::class, 'getDeliveredStatus']);

Route::get('daily-report', [HomeController::class, 'dailyReport'])->name('daily.report');