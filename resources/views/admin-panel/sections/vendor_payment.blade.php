
    <div class="container">
        <div class="collapse" id="balancesheettable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12 px-0">
                        <!--write your code here  -->

                        <div class="card px-0">
                            <div class="card-body bg-light border rounded px-0">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Balance Sheet Report</h5>
                                    <a class="btn-close" data-toggle="collapse" href="#balancesheettable" role="button" aria-expanded="false" aria-controls="collapseExample"><span aria-hidden="true"></span></a>
                                </div>

                                <div class="page-title-left m-3">
                                    <a class="btn btn-info btn-md text-white font-size-12 " data-bs-toggle="modal" data-bs-target="#vendor_payment_modal">Select Date</a>
                                </div>
                                @if (isset($countries))
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Receivable <br>Charges</th>
                                                <th>Payable<br>Charges</th>
                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp

                                            @if ($countries->count() > 0)
                                            @foreach ($countries as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->id }}</i>
                                                    </a>
                                                </td>
                                                <!-- <td>{{ $item->name }}</td> -->

                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>
                                                <!-- <td> {{ $item->id }} </td> -->
                                                <!-- <td> {{ $item->id }} </td> -->

                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td><code>No record found...</code></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="collapse" id="vendortable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12 px-0">
                        <!--write your code here  -->

                        <div class="card px-0">
                            <div class="card-body bg-light border rounded px-0">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Vendor Payment Section</h5>
                                    <a class="btn-close" data-toggle="collapse" href="#vendortable" role="button" aria-expanded="false" aria-controls="collapseExample"><span aria-hidden="true"></span></a>

                                </div>
                                <div class="page-title-left m-3">
                                    <a class="btn btn-info btn-md text-white font-size-12 " data-bs-toggle="modal" data-bs-target="#vendor_payment_modal">Add Vendor's Payment</a>
                                </div>
                                @if (isset($users))
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Tracking<br>ID</th>
                                                <th>Vendor <br>Charges</th>
                                                <th>Payment<br>Method</th>
                                                <th>Bulk<br>Payment</th>
                                                <th>Balance</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp

                                            @if ($users->count() > 0)
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->id }}</i>
                                                    </a>
                                                </td>
                                                <td>{{ $item->name }}</td>

                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>

                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td><code>No record found...</code></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="collapse" id="customertable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12 px-0">
                        <!--write your code here  -->

                        <div class="card px-0">
                            <div class="card-body bg-light border rounded px-0">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Customer Payment Section</h5>
                                    <a class="btn-close" data-toggle="collapse" href="#customertable" role="button" aria-expanded="false" aria-controls="collapseExample"><span aria-hidden="true"></span></a>
                                </div>

                                <div class="page-title-left m-3">
                                    <a class="btn btn-info btn-md text-white font-size-12 " data-bs-toggle="modal" data-bs-target="#vendor_payment_modal">Select Customer</a>
                                </div>
                                @if (isset($users))
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Parcel<br>Destination</th>
                                                <th>Parcel <br>Charges</th>
                                                <th>Receivable<br>Amount</th>
                                                <th>Paid<br>Amount</th>
                                                <th>Balance</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp

                                            @if ($users->count() > 0)
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->id }}</i>
                                                    </a>
                                                </td>
                                                <td>{{ $item->name }}</td>

                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>
                                                <td> {{ $item->id }} </td>

                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td><code>No record found...</code></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="vendor_payment_modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Vendor Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="vendor_payment_modal">
                    @csrf
                    <table class="table table-bordered w-100">
                        <tr>
                            <th>Select Vendor</th>
                            <th>Select Payment Method</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="vendor_payment_name" id="vendor_payment_name" class="form-control">
                                    @foreach($vendors as $vendor)
                                    <option value="{{$vendor->id}}"> {{$vendor->logistic_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="vendor_payment_method" id="vendor_payment_method" class="form-control">
                                    @foreach($payment_methods as $payment_method)
                                    <option value="{{$payment_method->id}}"> {{$payment_method->payment_method}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <th>Enter Amount</th>
                            <td>
                                <input type="text" name="vendor_payment_amount" value="" id="vendor_payment_amount" class="form-control">
                            </td>


                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary vendor-tracking-id" id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>