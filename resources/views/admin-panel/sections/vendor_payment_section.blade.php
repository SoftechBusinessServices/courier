
<div class="container">
    <div class="collapse" id="vendorpaytable">
        <div class="card card-body mb-0">
            <div class="row">
                <div class="col-12 px-0">
                    <!--write your code here  -->

                    <div class="card px-0">
                        <div class="card-body bg-light border rounded px-0">
                            <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                <h5 class="modal-title">Vendor Payment Section</h5>
                                <a class="btn-close" data-toggle="collapse" href="#vendorpaytable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>

                            </div>
                            <div class="page-title-left m-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-md text-white font-size-12 p-2 btn-block"
                                            data-bs-toggle="modal" data-bs-target="#vendor-payment-modal">Add
                                            Vendor's Payment</a>
                                    </div>
                                    {{-- <a href="#"
                                                class="btn btn-warning waves-effect waves-light ML-2  mr-4 pt-2 pb-0 print-btn-vendor-report px-3"><i
                                                    class="fa fa-print">Print</i></a> --}}
                                    <div class="col-md-6">
                                        <a href="{{ route('vendor-payment') }}"
                                            class="btn btn-warning btn-md text-white font-size-12 p-2 btn-block">Account
                                            Statements
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                <a class="btn-close" data-toggle="collapse" href="#vendortable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>

                            </div>
                            <div class="page-title-left m-3">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a class="btn btn-success btn-md text-white font-size-12 p-2"
                                                data-bs-toggle="modal" data-bs-target="#vendor-payment-modal">Add
                                                Vendor's Payment</a>
                                            <a class="btn btn-info btn-md text-white font-size-12 p-2"
                                                data-bs-toggle="modal" data-bs-target="#vendor-payment-modal">Account
                                                Statements
                                            </a>
                                            {{-- <a href="#"
                                                class="btn btn-warning waves-effect waves-light ML-2  mr-4 pt-2 pb-0 print-btn-vendor-report px-3"><i
                                                    class="fa fa-print">Print</i></a> --}}
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                {{-- <label for="">Select vendor</label> --}}
                                                <select name="" id="vendor-payment-select" class="form-control">
                                                    <option value="" class="form-control">Select Vendor</option>
                                                    {{-- @dd($vendors) --}}
                                                    @foreach ($companies as $company)
                                                        <option class="form-control" value="{{ $company->id }}">
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <a class="btn btn-info btn-md text-white font-size-12 p-2"
                                                    data-bs-toggle="modal" data-bs-target="#vendor-payment-modal">Add
                                                    Vendor's Payment</a>
                                                <a href="#"
                                                    class="btn btn-success waves-effect waves-light ML-2  mr-4 pt-2 pb-0 print-btn-vendor-report px-3"><i
                                                        class="fa fa-print"></i></a>
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
</div>




<!-- vendor-payment -->
<div class="modal fade" id="vendor-payment-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Vendor Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-payment-add') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="vendor-payment-form" action="{{ url('vendor-payment-add') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Select Vendor</label>
                            <select name="vendor_id" id="vendor_type" class="form-control" required>
                                <option value="" class="form-control">Select Vendor</option>
                                {{-- @dd($vendors) --}}
                                @foreach ($companies as $company)
                                    <option class="form-control" value="{{ $company->id }}">
                                        {{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Show Balance</label>
                            <input type="text" name="show_vendor_balance" id="show_vendor_balance"
                                class="form-control" readonly>
                            <input type="hidden" name="add_balance_vendor_id" id="add_balance_vendor_id">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Select Payment Method</label>
                            <select name="payment_method_id" id="payment_method_id" class="form-control" required>
                                <option value="">Select One Method</option>
                                @foreach ($payment_methods as $payment_method)
                                    <option value="{{ $payment_method->id }}">
                                        {{ $payment_method->payment_method }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Enter Amount</label>
                            <input type="text" name="collected_amount" value="" id="collected_amount" required
                                class="form-control">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-payment-form" class="btn btn-primary vendor-tracking-id"
                            id="modal_submit13" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close13"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>


<!-- Javascript -->
<script>
   
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
                    console.log(data);
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
                        // html += v.allocate_parcel[0].vendor_id;
                        html += v.allocate_parcel['0']['allocate_logistic'][
                            'logistic_name'
                        ];
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

   
    $('body').on('click', '.print-btn-vendor-report', function() {
        var divToPrint = $('.print-div-vendor-report').html();
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#vendor_type').on('change', function(e) {
            var vendor_id = e.target.value;
            $.ajax({
                url: "{{ route('get-vendor-payment-dues') }}",
                type: "GET",
                data: {
                    vendor_id: vendor_id
                },
                success: function(data) {
                    //   console.log(data);
                    // data =JSON.stringify(data);

                    $('#show_vendor_balance').val(data.vendor_tracking_charges);
                    $('#add_balance_vendor_id').val(vendor_id);
                }
            })
        });
    });
</script>
