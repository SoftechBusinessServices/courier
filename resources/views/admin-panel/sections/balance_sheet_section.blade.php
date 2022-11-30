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
                                <a href="#"
                                    class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 print-btn-balance-report px-3"><i
                                        class="fa fa-print"></i></a>
                            </div>

                            @if (isset($delivered_parcels))
                                <div class="print-div-balance-report">
                                    <div class="table-responsive">
                                        <table id="datatable-buttons"
                                            class="table table-bordered dt-responsive nowrap w-100 table-sm  table-sm balance-sheet-table">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>S.NO</th>
                                                    <th>Date</th>
                                                    <th>Parcel ID</th>
                                                    <th>Tracking<br>ID</th>
                                                    <th>Receivable <br>Charges</th>
                                                    <th>Payable<br>Charges</th>
                                                    <th>Net <br> Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
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

<!-- balance sheet-modal -->
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
                                <input type="date" class="form-control" name="end_date" id="end_date">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" ></script>
<script>
    //date-range picker
    $('body').on('submit', '#balance_sheet_form', function(e) {
        e.preventDefault();
        // alert(1);
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
                    html +=  moment(v.created_at).format('LLL');
                    html += '</td>';

                    html += '<td>';
                    html += v.parcel_id;
                    html += '</td>';

                    html += '<td>';
                    html += v.parcel_with_tracking.vendor_tracking_id;
                    html += '</td>';

                    html += '<td>';
                    html += rp = v.pl_final;
                    html += '</td>';

                    html += '<td>';
                    html += pp = v.parcel_with_charges.vendor_tracking_charges;
                    html += '</td>';

                    html += '<td>';
                    bp = rp - pp
                    html += bp;
                    html += '</td>';

                    html += '</tr>'; //tr-closed
                    ReceivableTotal += rp;
                    payableTotal += parseInt(v.parcel_with_charges.vendor_tracking_charges);
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

    $('body').on('blur', '#start_date', function() {
        var startDate = $(this).val();
        $('#end_date').prop('min', startDate);
    });


    $('body').on('click', '.print-btn-balance-report', function() {
        var divToPrint = $('.print-div-balance-report').html();
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
