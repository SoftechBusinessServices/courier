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
use App\Http\Controllers\ShippingChargesController;
use App\Http\Controllers\ParcelRegistrationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\LogisticController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RepresentativeController;

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
Route::get('/add-parcel', [ParcelRegistrationController::class, 'add_parcel'])->name('add-parcel');
Route::post('/store-parcel', [ParcelRegistrationController::class, 'store_parcel'])->name('store-parcel');
Route::get('edit-parcel/{id}', [ParcelRegistrationController::class, 'edit_parcel']);
Route::post('update-parcel/{id}', [ParcelRegistrationController::class, 'update_parcel']);
Route::get('delete-parcel/{id}', [ParcelRegistrationController::class, 'destroy_parcel'])->name('delete-parcel');

//ajax dependent
Route::get('getSelected/{id}', [ShippingChargesController::class, 'getSelected']);
Route::get('getCurrency/{id}', [ShippingChargesController::class, 'getCurrency']);
Route::get('getSelectedShipping/{id}', [ParcelRegistrationController::class, 'getSelectedShipping']);

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

//Shipping Charges
Route::get('add-charges', [ShippingChargesController::class, 'add_charges'])->name('add-charges');
Route::post('store-charges', [ShippingChargesController::class, 'store_charges'])->name('store-charges');
Route::get('delete-charges/{id}', [ShippingChargesController::class, 'destroy_charges'])->name('delete-charges');
Route::get('edit-charges/{id}', [ShippingChargesController::class, 'edit_charges']);
Route::post('update-charges/{id}', [ShippingChargesController::class, 'update_charges']);
Route::get('delete-charges/{id}', [ShippingChargesController::class, 'destroy_charges'])->name('delete-charges');
Route::get('restore-charges/{id}', [ShippingChargesController::class, 'restorecharges'])->name('restore-charges');
Route::get('charges-forceDelete/{id}', [ShippingChargesControllers::class, 'charges_forceDelete'])->name('charges-forceDelete');

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
Route::get('add-country', [CountryController::class, 'add_country'])->name('add-country');
Route::post('store-country', [CountryController::class, 'store_country'])->name('store-country');
Route::get('delete-country/{id}', [CountryController::class, 'destroy_country'])->name('delete-country');
Route::get('edit-country/{id}', [CountryController::class, 'edit_country']);
Route::post('update-country/{id}', [CountryController::class, 'update_country']);
Route::get('delete-country/{id}', [CountryController::class, 'destroy_country'])->name('delete-country');
Route::get('restore-country/{id}', [CountryController::class, 'restorecountry'])->name('restore-country');
Route::get('country-forceDelete/{id}', [CountryController::class, 'country_forceDelete'])->name('currency-country');

//Vendor Registration
Route::get('/add-logistic', [LogisticController::class, 'add_logistic'])->name('add-logistic');
Route::post('/store-logistic', [LogisticController::class, 'store_logistic'])->name('store-logistic');
Route::get('edit-logistic/{id}', [LogisticController::class, 'edit_logistic']);
Route::post('update-logistic/{id}', [LogisticController::class, 'update_logistic']);
Route::get('delete-logistic/{id}', [LogisticController::class, 'destroy_logistic'])->name('delete-logistic');

//Vendor Registration
Route::get('/add-representator', [RepresentativeController::class, 'add_representator'])->name('add-representator');
Route::post('/store-representator', [RepresentativeController::class, 'store_representator'])->name('store-representator');
Route::get('edit-representator/{id}', [RepresentativeController::class, 'edit_representator']);
Route::post('update-representator/{id}', [RepresentativeController::class, 'update_representator']);
Route::get('delete-representator/{id}', [RepresentativeController::class, 'destroy_representator'])->name('delete-representator');
Route::get('fetch-representative/{id}', [CompanyController::class, 'fetch_representative'])->name('fetch-representative');

//Print Previews
Route::get('/prnpriview', [PrintController::class, 'prnpriview']);
Route::get('/charges-print-view', [PrintController::class, 'charges_print_view']);
Route::get('/parcels-print-view', [PrintController::class, 'parcels_print_view']);
Route::get('/customers-print-view', [PrintController::class, 'customers_print_view']);
Route::get('/companies-print-view', [PrintController::class, 'companies_print_view']);
Route::get('/regions-print-view', [PrintController::class, 'regions_print_view']);
Route::get('/countries-print-view', [PrintController::class, 'countries_print_view']);
Route::get('/currencies-print-view', [PrintController::class, 'currencies_print_view']);

Route::get('report', [ReportController::class, 'index'])->name('report');
Route::get('daily-report', [ReportController::class, 'dailyReport'])->name('daily.report');

Route::post('update-user/{id}', [HomeController::class, 'update_user']);
Route::get('profile/{id}', [HomeController::class, 'profile']);
Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

Route::get('region/delete/{id}', [RegionController::class, 'destroy']);


