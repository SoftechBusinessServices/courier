<table>

    <thead>
        <tr>
            <td>#</td>
            <td>Date</td>
            <td>Parcel ID</td>
            <td>Tracking ID</td>
            {{-- <td>Vendor Name</td> --}}
            <td>Service Used</td>
            <td>Shipper Name</td>
            <td>Consignee Name</td>
            <td>Destination</td>
            <td>Payment Method</td>
            <td>Contents</td>
            <td>No of Boxes</td>
            <td>Weight</td>
            <td>Charges</td>
            {{-- <td>Balance</td> --}}
        </tr>
    </thead>
    <tbody>
        {{-- @dd($allocated_parcels); --}}
        @foreach ($allocated_parcels as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d F Y', strtotime($row->created_at)) }}</td>
                <td>{{ $row->parcel_id }}</td>
                <td>
                    @if ($row->parcel_with_tracking && $row->parcel_with_tracking->vendor_tracking_id)
                        <p>{{ $row->parcel_with_tracking->vendor_tracking_id }}</p>
                    @else
                        <p><code> (Not Assigned)</code></p>
                    @endif
                </td>
                {{-- <td>{{ $row->pl_id }}</td> --}}
                <td>{{ $row->parcel_with_service->service_name }}</td>
                <td>{{ $row->parcel_with_shipper->company_name }}</td>
                <td>{{ $row->parcel_with_consignee->consignee_name }}</td>
                <td>{{ $row->parcel_with_consignee->consignee_with_country->name }} </td>
                <td>{{ $row->parcel_with_payment->payment_method }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->pl_boxes }}</td>
                <td>{{ $row->pl_weight }}</td>
                <td>{{ $row->pl_final }}</td>
                {{-- <td>{{$row->final - $totalpaid}}</td> --}}
            </tr>

        @endforeach
        <tr>
            <th >Total Amount</th>
            <th class="text-dark">{{ $totalAmount }}</th>
        </tr>
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Date</td>
            {{-- <td>Total Amount</td> --}}
            <td>Paid Amount</td>
            <td>Remaing Amount </td>
            <td>Payment Method </td>
        </tr>
    </thead>
    <tbody>
        @forelse ($payment_logs as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ date('d F Y', strtotime($row->created_at)) }}</td>
                {{-- <td>{{ $row->total_amount }}</td> --}}
                <td>{{ $row->collected_amount }}</td>
                <td>{{ $row->remaining_amount }}</td>
                <td>{{ $row->paymentlog_with_method->payment_method }}</td>

            </tr>
        @empty
            <tr>
                <td colspan="4">
                   
                        No record ..
                </td>
            </tr>
        @endforelse

        <tr class="border">
            <th colspan="2" >Calculate Total</th>
            <th >{{ $totalpaid }}</th>
            <th colspan="2" >{{ $dues }}</th>
        </tr>
    </tbody>
</table>
<table >
    <tr>
        <th>Total Payable: </th>
        <td> {{ $totalAmount }}</td>
    </tr>
    <tr>
        <th>Total Paid: </th>
        <td>{{ $totalpaid }}</td>
    </tr>
    <tr>
        <th>Total Dues: </th>
        @php
            $dues = $totalAmount - $totalpaid;
        @endphp
        <td>{{ $dues }}</td>
    </tr>
</table>

