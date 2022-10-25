<?php

namespace App\Exports;

use App\Models\Parcel;
use App\Models\Content;
use App\Models\PaymentLog;
use App\Models\ParcelShipper;
use App\Models\AllocateParcel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data['customers'] =  ParcelShipper::get();
        $customer_id = (request()->has('customer')) ? request()->customer : 0;

        $data['allocated_parcels'] = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_charges', 'parcel_with_tracking', 

       
            'parcel_with_shipper' => function ($query) {
                $query->with('shipper_with_country');
            },
            'parcel_with_consignee' => function ($query) {
                $query->with('consignee_with_country');
            }
        ])
            ->where('shipper_id', $customer_id)
            ->whereIn('pl_status', ['allocated','delivered','processed'])
            ->orderBy('shipper_id', 'DESC')
            ->get();
            //  dd( $data['allocated_parcels'] );

            foreach($data['allocated_parcels'] as $val):
                
                $description = Content::whereIn('id',$val->pl_description)
                ->get()
                ->pluck('name')->toArray();
                $val->description = implode(" ", $description);
            endforeach;
             

        $data['totalAmount'] = array_sum(Parcel::where('parcels.shipper_id', $customer_id)->pluck('pl_final')->toArray());
        // dd( $data['totalAmount'] );

        $data['payment_logs'] = PaymentLog::with('paymentlog_with_method')
            ->where('payment_logs.customer_type', '1')
            ->where('payment_logs.vcid', $customer_id)
            ->orderBy('payment_logs.id', 'ASC')
            ->get();
        // dd($data['payment_logs']);

        $data['totalpaid'] = array_sum($data['payment_logs']->pluck('collected_amount')->toArray());
        // dd($data['totalpaid']);

        $check = PaymentLog::where('vcid', $customer_id)->latest()->take(1)->first();
        // dd($check);

        $remainingAmount = ($check) ? $check->remaining_amount : 0;

        // $data['totalpaid'] =  $remainingAmount;

        $data['dues'] =  $data['totalAmount'] - $data['totalpaid'];
        // dd($data['dues']);

        // $description = Content::whereIn('id',$data->pl_description)->get()->pluck('name')->toArray();
        // $pl_description =$data->description = implode('+', $description);
        return view('admin-panel.reports.exports.customer_payment_log',$data);
    }
    // public function headings(): array
    // {
    //     return [
    //       '#',
    //       'Date',
    //       'Parcel_id',
    //       'Service_Used',
    //       'Shipper_name',
    //       'Consignee_name',
    //       'Destination',
    //       'Payment Method',
    //       'Contents',
    //       'No of Boxes',
    //       'Weight',
    //       'Charges',
    //       'Total Amount',
    //       'Total Paid',
    //       'Total Dues',
    //     ];
    // }
}
