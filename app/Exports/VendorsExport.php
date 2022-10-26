<?php

namespace App\Exports;

use App\Models\Parcel;
use App\Models\Content;
use App\Models\Company;
use App\Models\PaymentLog;
use App\Models\ParcelShipper;
use App\Models\AllocateParcel;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class VendorsExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        $vendor_id = (request()->has('vendor')) ? request()->vendor : 0;

        $data['allocated_parcels'] = DB::table('allocate_parcels')
            ->leftJoin('parcels', 'parcels.id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('payment_methods', 'parcels.payment_id', '=', 'payment_methods.id')
            ->leftJoin('companies', 'companies.id', '=', 'allocate_parcels.vendor_id')
            ->leftJoin('parcel_shippers', 'parcels.shipper_id', '=', 'parcel_shippers.id')
            ->leftJoin('parcel_consignees', 'parcels.consignee_id', '=', 'parcel_consignees.id')
            ->leftJoin('countries', 'countries.id', '=', 'parcel_consignees.consignee_country_id')
            ->leftJoin('vendor_charges', 'vendor_charges.pl_id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('vendor_id_trackings', 'vendor_id_trackings.pl_id', '=', 'allocate_parcels.pl_id')
            ->leftJoin('services', 'allocate_parcels.service_id', '=', 'services.id')
            ->where('allocate_parcels.vendor_id', $vendor_id)
            ->orderBy('allocate_parcels.vendor_id', 'ASC')
            ->get();
            foreach($data['allocated_parcels'] as $row):
                $description = Content::whereIn('id',json_decode($row->pl_description,true))
                ->get()
                ->pluck('name')
                ->toArray();
                $row->description = implode(" ", $description);
            endforeach;

            // dd($data['allocated_parcels']);
        $data['totalAmount'] = array_sum($data['allocated_parcels']->pluck('vendor_tracking_charges')->toArray());
        // dd( $data['totalAmount'] );

        $data['payment_logs'] = DB::table('payment_logs')
            ->where('payment_logs.customer_type', '2')
            ->where('payment_logs.vcid', $vendor_id)
            ->orderBy('payment_logs.id', 'ASC')
            ->get();
        // $data['totalpaid'] = array_sum($data['payment_logs']->pluck('collected_amount')->toArray());
        // dd($data['totalpaid']);

        $check = PaymentLog::where('vcid', $vendor_id)
            ->where('customer_type', '2')
            ->latest()->take(1)->sum('collected_amount');

        // $remaingAmount = ($check) ? $check->remaining_amount : 0;
        $data['totalpaid'] =  $check;
        $data['companies'] = Company::all();
        // dd($data);
        // dd(2);

        return view('admin-panel.reports.exports.vendor_payment_log', $data);
    }
}
