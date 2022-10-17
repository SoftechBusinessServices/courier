<style>
    
    .page-header,
    .page-header-space {
      height: 100px;
    }

    .page-footer,
    .page-footer-space {
      height: 50px;
    }

    .page-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      border-top: 1px solid black;
      background: grey;
      color: white;
    }

    .page-header {
      position: fixed;
      top: 0mm;
      width: 100%;
      border-bottom: 1px solid black;
      background: grey;
      color: white;
    }

    .page {
      page-break-after: always;
    }

    @page {
      /* margin: 20mm; */
    }

    @media print {
      table{
        font-size: 15px !important; 
      }
      thead {
        display: table-header-group;
      }
      tfoot {
        display: table-footer-group;
      }

      .print-button {
        display: none !important;
      }

      body {
        margin: 0;
      }
    }
    .invoice-title{
        display: none;
    }
</style>
<div class="invoice-title">
    <div class="mb-0">
       <div class="row">
           <div class="col p-2 text-center">
               <img src="{{asset('assets/images/LogoBFS.png')}}" alt="logo" height="60" covered />
           </div>
           <div class="col">
               <label for="">SBS Courier Services</label>
               <p>Email: sbsservice@mail.com</p>
               <label for="">Phone: 091-21336444</label>
           </div>
           <div class="col">
               <p>Address: G15 markaz, Green Acre Plaza, Islamabad, Pakistan</p>
               <p>Website: www.bfs.com</p>
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
                                <a class="btn-close" data-toggle="collapse" href="#vendortable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>
                                      
                            </div>
                            <div class="page-title-left m-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {{-- <label for="">Select vendor</label> --}}
                                            <select name="" id="vendor-payment-select" class="form-control">
                                                <option value="" class="form-control">Select Vendor</option>
                                                {{-- @dd($vendors) --}}
                                                @foreach ($vendors as $vendor)
                                                    <option class="form-control" value="{{ $vendor->company_id }}">
                                                        {{ $vendor->logistic_company->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <a class="btn btn-info btn-md text-white font-size-12 p-2"
                                                data-bs-toggle="modal" data-bs-target="#vendor-payment-modal">Add
                                                Vendor's Payment</a> 
                                                <a href="#" class="btn btn-success waves-effect waves-light ML-2  mr-4 pt-2 pb-0 print-btn-vendor-report px-3"><i class="fa fa-print"></i></a>  
                                        </div>
                                    </div>
                                    <div class="col-md-1 offset-5">
                                        
                                    </div>
                                </div>
                            </div>

                            @if (isset($delivered_parcels))
                            <div class="print-div-vendor-report">
                                <div class="table-responsive">
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm  vendor-payment-table">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Vendor Name</th>
                                                <th>Tracking<br>ID</th>
                                                <th>Vendor <br>Charges</th>
                                                <th>Payment<br>Method</th>
                                                <th>Bulk<br>Payment</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @php
                                        $i = 1;
                                        @endphp
                                        @if ($delivered_parcels->count() > 0)

                                        @foreach ($delivered_parcels as $item)
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
                                                    <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                </a>
                                            </td>
                                            <td>{{ $item->allocate_parcel['0']['allocate_logistic']['logistic_name'] }}</td>

                                            <td>{{ $item->parcel_tracking->vendor_tracking_id}} </td>
                                            <td>{{ $item->parcel_charges->vendor_tracking_charges}} </td>
                                            <td>{{$item->parcel_payment_method->payment_method}}</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td><code>No record found...</code></td>
                                        </tr>
                                        @endif --}}
                                        </tbody>
                                    </table>
                                </div>
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
                                <a class="btn-close" data-toggle="collapse" href="#customertable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>
                            </div>

                            <div class="page-title-left m-3">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {{-- <label for="">Select vendor</label> --}}
                                            <select name="" id="customer-payment-select" class="form-control">
                                                <option value="" class="form-control">Select Customer</option>
                                                @foreach ($shipper_names as $row)
                                                    <option class="form-control" value="{{ $row->pl_phone_id }}">
                                                        {{ $row->company_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <a class="btn btn-info btn-md text-white font-size-12 p-2"
                                                data-bs-toggle="modal" data-bs-target="#customer-payment-modal">Add
                                                Customer's Payment</a>
                                                <a href="#" class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 print-btn-customer-report px-3"><i class="fa fa-print"></i></a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            @if (isset($processed_parcels))
                            <div class="print-div-customer-report">
                                <div class="table-responsive">
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm customer-payment-table">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Parcel<br>Destination</th>
                                                <th>Parcel <br>Charges</th>
                                                <!-- <th>Receivable<br>Amount</th> -->
                                                <th>Paid<br>Amount</th>
                                                <th>Balance</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @php
                                                $i = 1;
                                            @endphp

                                            @if ($processed_parcels->count() > 0)
                                                @foreach ($processed_parcels as $item)
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
                                                            <a href="{{ url('parcel-details/' . $item->id) }}"
                                                                class="btn btn-outline-secondary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                        </td>
                                                        <td>{{ $item->parcel_consignee->name }}</td>

                                                        <td> {{ $item->pl_final }} </td>
                                                        <td> {{ 0 }} </td>
                                                        <td> {{ 0 }} </td>
                                                        <!-- <td> {{ $item->id }} </td> -->

                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td><code>No record found...</code></td>
                                                </tr>
                                            @endif --}}
                                        </tbody>
                                    </table>
                                </div>
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
    <div class="collapse" id="balancesheettable">
        <div class="card card-body mb-0">
            <div class="row">
                <div class="col-12 px-0">
                    <!--write your code here  -->

                    <div class="card px-0">
                        <div class="card-body bg-light border rounded px-0">
                            <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                <h5 class="modal-title">Balance Sheet Report</h5>
                                <a class="btn-close" data-toggle="collapse" href="#balancesheettable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>
                            </div>

                            <div class="page-title-left m-3">
                                <a class="btn btn-info btn-md text-white font-size-12 " data-bs-toggle="modal"
                                    data-bs-target="#balance-sheet-modal">Select Date</a>
                                    <a href="#" class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 print-btn-balance-report px-3"><i class="fa fa-print"></i></a>
                            </div>

                            @if (isset($delivered_parcels))
                                <div class="print-div-balance-report">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons"
                                            class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm balance-sheet-table">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>S.NO</th>
                                                    <th>Date</th>
                                                    <th>Parcel ID</th>
                                                    <th>Tracking<br>ID</th>
                                                    <th>Receivable <br>Charges</th>
                                                    <th>Payable<br>Charges</th>
                                                    <th>Difference</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @php
                                                    $i = 1;
                                                @endphp
                                                @if ($delivered_parcels->count() > 0)
    
                                                    @foreach ($delivered_parcels as $item)
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
                                                                <a href="{{ url('parcel-details/' . $item->id) }}"
                                                                    class="btn btn-outline-secondary btn-sm delete"
                                                                    title="View">
                                                                    <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                                </a>
                                                            </td>
    
    
                                                            <td>{{ $item->parcel_tracking->vendor_tracking_id }} </td>
                                                            <td>{{ $a = $item->pl_final }}</td>
                                                            <td>{{ $b = $item->parcel_charges->vendor_tracking_charges }}
                                                            </td>
                                                            <td>{{ $a - $b }}</td>
    
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td><code>No record found...</code></td>
                                                    </tr>
                                                @endif --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="vendor-payment-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Vendor Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="vendor-payment-form">
                    @csrf
                    <table class="table table-bordered w-100">
                        <tr>
                            <th>Selected Vendor</th>
                            <th>Select Payment Method</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="vendor_payment_name" id="vendor_payment_name"
                                    class="form-control" readonly>
                            </td>
                            <td>
                                <select name="vendor_payment_method" id="vendor_payment_method" class="form-control">
                                    <option value="">Select One Method</option>
                                    @foreach ($payment_methods as $payment_method)
                                        <option value="{{ $payment_method->id }}">
                                            {{ $payment_method->payment_method }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <th>Enter Amount</th>
                            <td>
                                <input type="text" name="vendor_payment_amount" value=""
                                    id="vendor_payment_amount" class="form-control">
                            </td>


                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-payment-form" class="btn btn-primary vendor-tracking-id"
                            id="modal_submit11" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close11"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="customer-payment-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Customer Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="customer-payment-form">
                    @csrf
                    <table class="table table-bordered w-100">
                        <tr>
                            <th>Selected Customer</th>
                            <th>Select Payment Method</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="customer_payment_name" id="customer_payment_name"
                                    class="form-control" readonly>
                            </td>
                            <td>
                                <select name="vendor_payment_method" id="vendor_payment_method" class="form-control">
                                    <option value="">Select One Method</option>
                                    @foreach ($payment_methods as $payment_method)
                                        <option value="{{ $payment_method->id }}">
                                            {{ $payment_method->payment_method }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <th>Enter Amount</th>
                            <td>
                                <input type="text" name="vendor_payment_amount" value=""
                                    id="vendor_payment_amount" class="form-control">
                            </td>


                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="customer-payment-form"
                            class="btn btn-primary vendor-tracking-id" id="modal_submit11"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close12"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="balance-sheet-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Datewise Fetching Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <form id="balance_sheet_modal" action="{{ route('daily.report') }}" method="get"> --}}
                <form id="balance_sheet_form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">From Date</label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">To Date</label>
                                <input type="date" class="form-control" name="end_date" id ="end_date">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" form="balance_sheet_form" class="btn btn-primary "
                                id="modal_submit14" value="Submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
            </form>

        </div>
    </div>
</div>


<script>
    $('body').on('blur','#start_date',function(){
        var startDate= $(this).val();
        $('#end_date').prop('min',startDate);
    });

    $('body').on('change', '#vendor-payment-select', function(e) {
        // e.prevent
        id = $(this).val();
        if (id == "") {
            return false;
        }

        try {

            $.ajax({

                url: "{{ url('/get-vendor-parcels-list') }}",
                type: "GET",
                data: {
                    'id': id
                },
                success: function(data) {
                    var html = '';
                    $.each(data, function(k, v) {
                        html += '<tr>';

                        html += '<td>';
                        html += v.id;
                        html += '</td>';

                        html += '<td>';
                        html += v.allocate_parcel[0].created_at;
                        html += '</td>';

                        html += '<td>';
                        html += v.pl_id;
                        html += '</td>';

                        html += '<td>';
                        html += v.allocate_parcel[0].vendor_id;
                        html += '</td>';

                        html += '<td>';
                        html += v.parcel_tracking.vendor_tracking_id;
                        html += '</td>';
                        html += '<td>';
                        html += v.parcel_charges.vendor_tracking_charges;
                        html += '</td>';


                        html += '</tr>';
                    });
                    $('.vendor-payment-table>tbody').html(html);
                }
            });

        } catch (e) {
            console.log(e);
        }
    });

    $('body').on('change', '#customer-payment-select', function(e) {
        // e.prevent
        id = $(this).val();
        if (id == "") {
            return false;
        }

        try {

            $.ajax({

                url: "{{ url('/get-customer-parcels-list') }}",
                type: "GET",
                data: {
                    'id': id
                },
                success: function(data) {
                    var html = '';
                    $.each(data, function(k, v) {
                        html += '<tr>';

                        html += '<td>';
                        html += v.id;
                        html += '</td>';

                        html += '<td>';
                        html += v.created_at;
                        html += '</td>';

                        html += '<td>';
                        html += v.pl_id;
                        html += '</td>';

                        html += '<td>';
                        html += v.parcel_consignee.name;
                        html += '</td>';

                        html += '<td>';
                        html += v.pl_final;
                        html += '</td>';

                        html += '<td>';
                        html +=
                            '<input type="text" class="form-control" name="customer_pay" id="customer_pay" placeholder="Enter Payment">';
                        html += '</td>';

                        html += '<td>';
                        html +=
                            '<input type="hidden" class="form-control" name="customer_dues" id="customer_dues" >';
                        html += '</td>';


                        html += '</tr>';
                    });
                    $('.customer-payment-table>tbody').html(html);
                }
            });

        } catch (e) {
            console.log(e);
        }
    });

    //date-range picker
    $('body').on('submit', '#balance_sheet_form', function(e) {
        e.preventDefault();
        alert(1);
        var fdata = new FormData(this);
        // console.log(Object.fromEntries(fdata)); return false;
        $.ajax({
            url: "{{ route('date-wise-tracking') }}",
            type: "POST",
            data: fdata,
            processData: false,
            contentType: false,
            // processCache : false,
            success: function(data) {
                console.log(data);

                $('#balance-sheet-modal').modal('hide');

                var html = '';
                var payableTotal = 0;
                var ReceivableTotal = 0;
                var DifferenceTotal = 0;
                $.each(data, function(k, v) {


                    html += '<tr>';

                    html += '<td>';
                    html += v.id;
                    html += '</td>';

                    html += '<td>';
                    html += v.created_at;
                    html += '</td>';

                    html += '<td>';
                    html += v.pl_id;
                    html += '</td>';

                    html += '<td>';
                    html += v.parcel_tracking.vendor_tracking_id;
                    html += '</td>';

                    html += '<td>';
                    html += rp = v.pl_final;
                    html += '</td>';

                    html += '<td>';
                    html += pp = v.parcel_charges.vendor_tracking_charges;
                    html += '</td>';

                    html += '<td>';
                    bp = rp - pp
                    html += bp;
                    html += '</td>';

                    html += '</tr>'; //tr-closed
                    ReceivableTotal +=  rp;
                    payableTotal += parseInt(v.parcel_charges.vendor_tracking_charges);
                    DifferenceTotal += bp;

                });



                html += '<tr>';

                html += '<th colspan="4" style="text-align: end;">';
                html += 'Total';
                html += '</h>';
                html += '</th>';
                html += '<th>';
                html += ReceivableTotal;
                html += '</th>';

                html += '<th>';
                html += payableTotal;
                html += '</th>';

                html += '<th>';
                html += DifferenceTotal;
                html += '</th>';

                html += '</tr>'; //tr-closed

                $('.balance-sheet-table>tbody').html(html);
            }

        }); //ajax function closed 

    }); // on-submit function closed

    $('body').on('click','.print-btn-balance-report',function(){
        var divToPrint = $('.print-div-balance-report').html();
        var header = $('.invoice-title').html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        // frameDoc.document.write('<table><thead><tr><td>');
        // frameDoc.document.write('<div class="page-header-space">');
        //     frameDoc.document.write('header');
        // frameDoc.document.write('</div></td></tr> </thead><tbody><tr><td><div class="page" style="line-height: 3">');
        // frameDoc.document.write(divToPrint);
        // frameDoc.document.write('</div></td></tr></tbody>');
        // frameDoc.document.write('<tfoot><tr><td><div class="page-footer-space">');
        // frameDoc.document.write("footer");
        // frameDoc.document.write('</div></td></tr></tfoot></table>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />');
        frameDoc.document.write("<link href='{{ asset('assets/css/bootstrap.min.css') }}' id='bootstrap-style' rel='stylesheet' type='text/css' />");
        //Append the DIV contents.
        frameDoc.document.write(header);
        frameDoc.document.write(divToPrint);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
    $('body').on('click','.print-btn-vendor-report',function(){
        var divToPrint = $('.print-div-vendor-report').html();
        var header = $('.invoice-title').html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        // frameDoc.document.write('<table><thead><tr><td>');
        // frameDoc.document.write('<div class="page-header-space">');
        //     frameDoc.document.write('header');
        // frameDoc.document.write('</div></td></tr> </thead><tbody><tr><td><div class="page" style="line-height: 3">');
        // frameDoc.document.write(divToPrint);
        // frameDoc.document.write('</div></td></tr></tbody>');
        // frameDoc.document.write('<tfoot><tr><td><div class="page-footer-space">');
        // frameDoc.document.write("footer");
        // frameDoc.document.write('</div></td></tr></tfoot></table>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />');
        frameDoc.document.write("<link href='{{ asset('assets/css/bootstrap.min.css') }}' id='bootstrap-style' rel='stylesheet' type='text/css' />");
        //Append the DIV contents.
        frameDoc.document.write(header);
        frameDoc.document.write(divToPrint);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
    $('body').on('click','.print-btn-customer-report',function(){
        var divToPrint = $('.print-div-customer-report').html();
        var header = $('.invoice-title').html();
        var frame1 = $('<iframe />');
        frame1[0].name = "frame1";
        frame1.css({ "position": "absolute", "top": "-1000000px" });
        $("body").append(frame1);
        var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
        frameDoc.document.open();
        //Create a new HTML document.
        // frameDoc.document.write('<table><thead><tr><td>');
        // frameDoc.document.write('<div class="page-header-space">');
        //     frameDoc.document.write('header');
        // frameDoc.document.write('</div></td></tr> </thead><tbody><tr><td><div class="page" style="line-height: 3">');
        // frameDoc.document.write(divToPrint);
        // frameDoc.document.write('</div></td></tr></tbody>');
        // frameDoc.document.write('<tfoot><tr><td><div class="page-footer-space">');
        // frameDoc.document.write("footer");
        // frameDoc.document.write('</div></td></tr></tfoot></table>');
        frameDoc.document.write('</head><body>');
        //Append the external CSS file.
        frameDoc.document.write('<link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />');
        frameDoc.document.write("<link href='{{ asset('assets/css/bootstrap.min.css') }}' id='bootstrap-style' rel='stylesheet' type='text/css' />");
        //Append the DIV contents.
        frameDoc.document.write(header);
        frameDoc.document.write(divToPrint);
        frameDoc.document.write('</body></html>');
        frameDoc.document.close();
        setTimeout(function () {
            window.frames["frame1"].focus();
            window.frames["frame1"].print();
            frame1.remove();
        }, 500);
    });
</script>
