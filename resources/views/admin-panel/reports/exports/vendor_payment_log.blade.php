

<table>

    <thead>
        <tr>
            <td>#</td>
            <td>Date</td>
            <td>Parcel ID</td>
            <td>Tracking ID</td>
            <td>Vendor Charges</td>
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
            <td>{{ $row->vendor_tracking_id }}</td>
            <td class="bg-secondary text-white">
                {{ $row->vendor_tracking_charges }}</td>
            <td>{{ $row->service_name }}</td>
            <td>{{ $row->company_name }}</td>
            <td>{{ $row->consignee_name }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->payment_method }}</td>
            <td>{{ $row->description }}</td>
            <td>{{ $row->pl_boxes }}</td>
            <td>{{ $row->pl_weight }}</td>
            <td>{{ $row->pl_final }}</td>
        </tr>
        @endforeach
        <tr>
            <td>
                No data found
            </td>
        </tr>
    </tbody>
</table>


<table>
    <thead>
        <tr>
            <td>#</td>
            <td>Date</td>
            <td>Paid Amount</td>
            <td>Remaing Amount </td>
        </tr>
    </thead>
    <tbody>
        @forelse($payment_logs as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ date('d F Y', strtotime($row->created_at)) }}</td>
            <td>{{ $row->collected_amount }}</td>
            <td>{{ $row->remaining_amount }}</td>
            {{-- <td>{{$row->vendor_tracking_charges}}</td> --}}
        </tr>
        @empty
            <tr>
                <td>
                   No record found
                </td>
            </tr>
        @endforelse

       
    </tbody>
</table>


<table >
    <tr>
        <th>Total Payable: </th>
        <td>{{ $totalAmount }}</td>
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

