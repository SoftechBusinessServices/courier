<!------------------TracKing Modal---------------------->
<div class="modal fade" id="trackingmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Update Tracking ID Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="vendor-tracking-id">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Tracking ID</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcell_idd" value="" id="parcell_idd" class="form-control" readonly>
                            </td>
                            <td>
                                <input type="text" name="tracking_idd" value="" id="tracking_idd" class="form-control">
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary vendor-tracking-id" id="modal_submit3" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close3" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<div class="container ">
    <div class="collapse" id="allocatetable">
        <div class="card card-body mb-0">
            <div class="row">
                <div class="col-12 px-0">
                    <!--write your code here  -->
                    <div class="">
                        <div class="card px-0">
                            <div class="card-body bg-light border rounded px-0">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Allocated Parcells</h5>

                                    <a class="btn-close" data-toggle="collapse" href="#allocatetable" role="button" aria-expanded="false" aria-controls="collapseExample"><span aria-hidden="true"></span></a>
                                </div>
                                @if (isset($allocated_parcels))
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 table-sm text-center">
                                        <thead>
                                            <tr class="text-center font-size-14">
                                                <th>S.No</th>
                                                <th>Parcel ID</th>
                                                <th>Parcel<br>Destination</th>
                                                <th>Despatch<br>Date</th>

                                                <th>Weight<br>(kilogram)</th>
                                                <th>Parcel<br>Cost</th>
                                                <th>Vendor<br>Name</th>
                                                <th>Tracking<br>ID</th>
                                                <th>Vendor<br>Charges</th>
                                                <th>Parcel<br>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @if ($allocated_parcels->count() > 0)
                                            @foreach ($allocated_parcels as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                    </a>
                                                </td>
                                                <td>{{ $item->country->name }}</td>
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td> {{ $item->pl_weight }} </td>
                                                <td> {{ $item->pl_final }} </td>
                                                <td> {{ $item->allocate_parcel }} </td>
                                                <td id="trackingModal_{{ $item->pl_id }}">
                                                    <a class="btn btn-outline-success btn-sm tracking_btn" title="add" data-bs-toggle="modal" data-bs-target="#trackingmodal" id="{{ $item->pl_id }}">
                                                        update
                                                    </a>
                                                </td>
                                                <td id="trackingModal2_{{ $item->pl_id }}">
                                                    <a class="btn btn-outline-primary btn-sm charges_btn" title="add" data-bs-toggle="modal" data-bs-target="#vendor_charges_update" id="{{ $item->pl_id }}">
                                                        update
                                                    </a>
                                                </td>

                                                <td>
                                                    @if ($item->pl_status == 'delivered')
                                                    <button type="button" class="btn btn-danger btn-sm disabled">
                                                        {{ $item->pl_status }} </button>
                                                    @else
                                                    <a class="btn btn-outline-info btn-sm delivered_status" title="add" id="{{ $item->pl_id }}">
                                                        Deliver
                                                    </a>
                                                    @endif
                                                </td>

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
</div>

<div class="modal fade" id="vendor_charges_update" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Update Vendor Charges Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking-charges') }}" method="POST" id="vendor-tracking-charges"> -->
                <form method="POST" id="vendor-tracking-charges">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Charges</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcell_iddd" value="" id="parcell_iddd" class="form-control" readonly>
                            </td>
                            <td>
                                <input type="text" name="vendor_charges" id="vendor_charges" class="form-control">
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-charges" class="btn btn-primary " id="modal_submit4" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close4" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('body').on('submit', '#vendor-tracking-charges', function(e) {
            e.preventDefault();
            var fdata = new FormData(this);
            // console.log(Object.fromEntries(fdata)); return false;
            $.ajax({
                url: "{{ route('vendor-tracking-charges') }}",
                type: "POST",
                data: fdata,
                processData: false,
                contentType: false,
                // processCache : false,
                success: function(data) {

                    if (data.success == 0) {
                        $.each(data.errors, function(x, y) {
                            toastr.error(y[0], 'error');
                        });
                    }
                    if (data.success == 1) {
                        $('#trackingModal2_' + track_id2).text(data.data.vendor_tracking_charges);
                        toastr.success('record updated', 'success');
                        $('#vendor_charges_update').modal('hide');
                        // console.log(track_id);
                    }

                }

            })
        });


        $('.tracking_btn').on('click', function(e) {
            e.preventDefault();
            // alert(1);
            track_id = this.id;
            $('#parcell_idd').val(this.id);
            // console.log(data_id);


        });

        $('.charges_btn').on('click', function(e) {
            e.preventDefault();
            // alert(2);
            track_id2 = this.id;
            $('#parcell_iddd').val(this.id);
        });


        $('.delivered_status').on('click', function(e) {
            e.preventDefault();
            var pl_id = (this.id);
            // alert(pl_id)
            if (pl_id) {

                $.ajax({
                    url: "{{ url('/getDeliveredStatus') }}/" + pl_id,
                    type: "GET",
                    //    data : {"_token":"{{ csrf_token() }}"},
                    //    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('.delivered_status').empty();
                            $('.delivered_status').append('Dilevered');
                            $('.delivered_status').addClass("text-danger");

                        } else {
                            $('.delivered_status').empty();
                        }
                    }
                });
            } else {
                $('.delivered_status').empty();
            }
        });

        $('body').on('submit', '#vendor-tracking-id', function(e) {
            e.preventDefault();
            var fdata = new FormData(this);
            // console.log(Object.fromEntries(fdata)); return false;
            $.ajax({
                url: "{{ route('vendor-tracking') }}",
                type: "POST",
                data: fdata,
                processData: false,
                contentType: false,
                // processCache : false,
                success: function(data) {

                    if (data.success == 0) {
                        $.each(data.errors, function(x, y) {
                            toastr.error(y[0], 'error');
                        });
                    }
                    if (data.success == 1) {
                        $('#trackingModal_' + track_id).text(data.data.vendor_tracking_id);
                        toastr.success('record updated', 'success');
                        $('#trackingmodal').modal('hide');

                        // console.log(track_id);
                    }

                }

            })
        });

    });
</script>