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
                                            {{-- @dd($shipper_names); --}}
                                            <select name="" id="customer-payment-select" class="form-control">
                                                <option value="" class="form-control">Select Customer
                                                </option>
                                                <select name="customer_id" id="customer_id" class="form-control">
                                                    <option value="" class="form-control">Select Customer
                                                    </option>
                                                    {{-- @dd($vendors) --}}
                                                    @foreach ($companies as $company)
                                                        <option class="form-control" value="{{ $company->id }}">
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <a class="btn btn-info btn-md text-white font-size-12 p-2"
                                                data-bs-toggle="modal" data-bs-target="#customer-payment-modal">Add
                                                Customer's Payment</a>
                                            <a href="#"
                                                class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 print-btn-customer-report px-3"><i
                                                    class="fa fa-print"></i></a>
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
    <div class="collapse" id="customerpaytable">
        <div class="card card-body mb-0">
            <div class="row">
                <div class="col-12 px-0">
                    <!--write your code here  -->

                    <div class="card px-0">
                        <div class="card-body bg-light border rounded px-0">
                            <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                <h5 class="modal-title">Customer Payment Section</h5>
                                <a class="btn-close" data-toggle="collapse" href="#vendorpaytable" role="button"
                                    aria-expanded="false" aria-controls="collapseExample"><span
                                        aria-hidden="true"></span></a>

                            </div>
                            <div class="page-title-left m-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="btn btn-success btn-md text-white font-size-12 p-2 btn-block"
                                            data-bs-toggle="modal" data-bs-target="#customer-payment-modal">Add
                                            Customer's Payment</a>
                                    </div>
                                    {{-- <a href="#"
                                                class="btn btn-warning waves-effect waves-light ML-2  mr-4 pt-2 pb-0 print-btn-vendor-report px-3"><i
                                                    class="fa fa-print">Print</i></a> --}}
                                    <div class="col-md-6">
                                        <a href="{{ route('customer-payment') }}"
                                            class="btn btn-info btn-md text-white font-size-12 p-2 btn-block">Account
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

<!-- customer-payment -->
<div class="modal fade" id="customer-payment-modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Customer Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <!-- <form action="{{ url('customer-payment-add') }}" method="POST" id="vendor-tracking-id"> -->
                    <form method="POST" id="customer-payment-form" action="{{ url('customer-payment-add') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Select Customer</label>
                                <select name="customer_id" id="customer_type" class="form-control" required>
                                    <option value="" class="form-control">Select Customer</option>
                                    {{-- @dd($vendors) --}}
                                    @foreach ($customers as $customer)
                                        <option class="form-control" value="{{ $customer->id }}">
                                            {{ $customer->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Show Balance</label>
                                <input type="text" name="show_customer_balance" id="show_customer_balance"
                                    class="form-control" readonly>
                                    <input type="hidden" name="add_balance_customer_id" id="add_balance_customer_id">
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
                                <input type="text" name="collected_amount" value="" id="collected_amount"
                                    class="form-control" required>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <!-- Toogle to second dialog -->
                            <button type="submit" form="customer-payment-form"
                                class="btn btn-primary vendor-tracking-id" id="modal_submit12"
                                value="Submit">Submit</button>
                            <button type="button" class="btn btn-secondary" id="modal_close12"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                </div>
                </form>


            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="customer_payment_modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Vendor Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="customer_payment_modal">
                    @csrf
                    <table class="table table-bordered w-100">
                        <tr>
                            <th>Select Customer</th>
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
                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary vendor-tracking-id" id="modal_submit5" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close5" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#customer_type').on('change', function(e) {
            var customer_id = e.target.value;
            // alert(customer_id);
            $.ajax({
                url: "{{ route('get-customer-payment-dues') }}",
                type: "GET",
                data: {
                    customer_id: customer_id
                },
                success: function(data) {
                      console.log(data);
                    // data =JSON.stringify(data);

                    $('#show_customer_balance').val(data);
                    $('#add_balance_customer_id').val(customer_id);
                }
            })
        });
    });

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
                    console.log(data);
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


</script>
