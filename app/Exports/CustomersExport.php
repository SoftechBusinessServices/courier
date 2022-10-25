<?php

namespace App\Exports;

use App\Models\Parcel;
use App\Models\Content;
use App\Models\AllocateParcel;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return AllocateParcel::all();
        $data['allocated_parcels'] = Parcel::with(['parcel_with_payment','parcel_with_service','parcel_with_charges', 'parcel_with_tracking', 
        
        // 'parcel_with_tracking'  => function ($query) {
        //     $query->with('tracking_with_allocate_parcel');
        // },
       
            'parcel_with_shipper' => function ($query) {
                $query->with('shipper_with_country');
            },
            'parcel_with_consignee' => function ($query) {
                $query->with('consignee_with_country');
            }
        ])
            // ->where('shipper_id', $customer_id)
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

            return $data['allocated_parcels'];
    }
    public function headings(): array
    {
        return [
          '#',
          'Date',
          'Parcel_id',
          'Service_Used',
          'Shipper_name',
          'Consignee_name',
          'Destination',
          'Payment Method',
          'Contents',
          'No of Boxes',
          'Weight',
          'Charges',
          'Total Amount',
          'Total Paid',
          'Total Dues',
        ];
    }
}
