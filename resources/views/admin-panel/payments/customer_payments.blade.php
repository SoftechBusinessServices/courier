@extends('admin-panel.index')
@section('content')
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
            table {
                font-size: 10px !important;
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

        .invoice-title {
            display: none;
        }
    </style>
    <div class="invoice-title">
        <div class="mb-0">
            <div class="row">
                <div class="col p-2 text-center">
                    <img src="{{ asset('assets/images/LogoBFS.png') }}" alt="logo" height="60" covered />
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

    <div class="">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card ">
                            <div class="card-body m-2">
                                <p class="card-title-desc text-dark mb-2 py-1 px-2 rounded text-center"
                                    style="background-color: #d6dbf8">
                                    <span class="font-size-20 font-weight-bold text-center">Customer Payment Details</span>
                                </p>
                                <form method="get" id="searchForm">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group mt-2">
                                                <label for="" class="text-danger ml-2">Choose One Customer </label>
                                                <select name="customer" id="customer-payment-select" class="form-control"
                                                    onchange="$('#searchForm').submit()">
                                                    <option value="" class="form-control">Select Customer</option>

                                                    @foreach ($customers as $customer)
                                                        <option class="form-control" value="{{ $customer->id }}"
                                                            @if (request()->customer == $customer->id) selected @endif>
                                                            {{ $customer->company_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2 mt-4 p-3">
                                            <a href="#"
                                                class="btn btn-success waves-effect waves-light  mr-2 p-1 pb-0 print-btn-customer-report px-3"><i
                                                    class="fa fa-print">Print</i></a>
                                            <a href="{{ route('employees.exportexcel') }}"
                                                class="btn btn-primary waves-effect waves-light  mr-2 p-1 pb-0  px-3">Excel Export</a>
                                                  
                                        </div>
                                    </div>
                                </form>
                                <div class="print-div-customer-report">
                                    <div class="row mb-2">
                                        <div class="col-12 border">
                                            <h6 class="text-center mt-2 font-weight-bold text-center text-secondary border">
                                                Customer's <span class="text-info">Delivered Parcels</span> Details</h6>
                                            <hr>
                                            <table id="datatable-buttons"
                                            class="table table-bordered dt-responsive nowrap w-100 table-sm text-center  ">

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
                                                    @forelse ($allocated_parcels as $row)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ date('d F Y', strtotime($row->created_at)) }}</td>
                                                            <td>{{ $row->parcel_id }}</td>
                                                            <td>
                                                                @if($row->parcel_with_tracking && $row->parcel_with_tracking->vendor_tracking_id)
                                                                
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
                                                    @empty
                                                        <p>No data</p>
                                                    @endforelse
                                                    <tr class="border">
                                                        <th colspan="4" class="text-right">Total Amount</th>
                                                        <th class="text-dark">{{ $totalAmount }}</th>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-8 border">
                                            <h6 class="text-center mt-2 font-weight-bold text-center text-secondary border">
                                                Customer's <span class="text-info">Payments</span> Details</h6>
                                            <hr>
                                            <div>
                                                <label for="">Total Payable:</label>
                                                <span class="text-bold text-danger bold">{{ $totalAmount }} </span>
                                            </div>


                                            <table
                                                class="table table-bordered dt-responsive nowrap w-100 table-sm">
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
                                                                <div class="text-danger">
                                                                    No record ..
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                    <tr class="border">
                                                        <th colspan="2" class="text-center">Calculate Total</th>
                                                        <th class="text-dark bold">{{ $totalpaid }}</th>
                                                        <th colspan="2" class="text-dark bold">{{ $dues }}</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-4 border">
                                            <h6 class="text-center mt-2 font-weight-bold text-center text-secondary border">
                                                Customer <span class="text-info">Dues</span> Details</h6>
                                            <hr>
                                            <table class="table table-sm">
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
                                        </div>
                                    </div>
                                </div> <!--print-div-->

                            </div>
                        </div>

                        <!-- Back & Dashboard btns -->
                        <div class="d-flex justify-content-between my-2">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white">&#60; Back</a>
                            <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                        </div>
                    </div>


                </div> <!-- end col -->
            </div>
        </div>
    </div>
    </div>
    </div>

    <script>
        $('body').on('click', '.print-btn-customer-report', function() {
            var divToPrint = $('.print-div-customer-report').html();
            var header = $('.invoice-title').html();
            var frame1 = $('<iframe />');
            frame1[0].name = "frame1";
            frame1.css({
                "position": "absolute",
                "top": "-1000000px"
            });
            $("body").append(frame1);
            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ?
                frame1[0].contentDocument.document : frame1[0].contentDocument;
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
            frameDoc.document.write(
                '<link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />'
            );
            frameDoc.document.write(
                "<link href='{{ asset('assets/css/bootstrap.min.css') }}' id='bootstrap-style' rel='stylesheet' type='text/css' />"
            );
            //Append the DIV contents.
            frameDoc.document.write(header);
            frameDoc.document.write(divToPrint);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function() {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                frame1.remove();
            }, 500);
        });
    </script>
@endsection
