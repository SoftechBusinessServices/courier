<!------------------TracKing Modal---------------------->
<div class="modal fade" id="trackingmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Update Tracking ID Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" id="vendor-tracking-id">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Tracking ID</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcel_id" value="" id="parcel_id"
                                    class="form-control" readonly>
                                <input type="hidden" name="pl_id" value="" id="pl_id"
                                    class="form-control">

                                <br><input type="hidden" name="selected_vendor_id" value="" id="selected_vendor_id"
                                    class="form-control" readonly>
                            </td>
                            <td>
                                <input type="text" name="vendor_tracking_id" value="" id="vendor_tracking_id"
                                    class="form-control" required>
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">

                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary vendor-tracking-id"
                            id="modal_submit3" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close3"
                            data-bs-dismiss="modal">Close</button>
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

                                    <a class="btn-close" data-toggle="collapse" href="#allocatetable" role="button"
                                        aria-expanded="false" aria-controls="collapseExample"><span
                                            aria-hidden="true"></span></a>
                                </div>
                                @if (isset($allocated_parcels))
                                    <div class="table-responsive">
                                        <table id="datatable"
                                            class="table table-bordered dt-responsive  nowrap w-100 table-sm text-center">
                                            <thead>
                                                <tr class="text-center font-size-14">
                                                    <th>S.No</th>
                                                    <th>Parcel ID</th>
                                                    <th>Parcel<br>Destination</th>
                                                    <th>Despatch<br>Date</th>

                                                    <th>Weight<br>(kilogram)</th>
                                                    <th>Parcel<br>Cost</th>
                                                    <th>Service<br>Name</th>
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
                                                                <a href="{{ url('parcel-details/' . $item->id) }}"
                                                                    class="btn btn-outline-secondary btn-sm delete"
                                                                    title="View">
                                                                    <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                {{ $item->allocate_with_parcel->parcel_with_consignee->consignee_with_country->name }}
                                                            </td>
                                                            <td>
                                                                @php
                                                                    $month = date('d/m/Y', strtotime($item->allocate_with_parcel->created_at));
                                                                    
                                                                    echo $month;
                                                                @endphp
                                                            </td>
                                                            <td> {{ $item->allocate_with_parcel->pl_weight }} </td>
                                                            <td> {{ $item->allocate_with_parcel->pl_final }} </td>



                                                            <td>
                                                                {{ $item->allocate_with_service->service_name }}

                                                            </td>
                                                            <td> {{ $item->allocate_with_logistic->name }} </td>



                                                            <td>



                                                                @if ($item->allocate_with_parcel->parcel_with_tracking)
                                                                    <p id="tracking_id_style">
                                                                        <button type="button"
                                                                            class="btn bg-success text-white btn-sm disabled">
                                                                            {{ $item->allocate_with_parcel->parcel_with_tracking->vendor_tracking_id }}
                                                                        </button>
                                                                    </p>
                                                                @else
                                                                {{-- @php echo($item->id);  @endphp --}}
                                                                    <p id="trackingModal_{{ $item->id }}">
                                                                        <a class="btn btn-outline-success btn-sm tracking_btn"
                                                                            title="add" data-bs-toggle="modal"
                                                                            data-bs-target="#trackingmodal"
                                                                            id="{{ $item->pl_id }}"
                                                                            data-pl-id="{{ $item->allocate_with_parcel->pl_id}}"
                                                                            data-vendor-id="{{ $item->vendor_id }}">
                                                                            update
                                                                        </a>
                                                                    </p>
                                                                @endif
                                                            </td>
                                                            </td>

                                                            <td>
                                                                @php
                                                                //    var_dump( $item
                                                                //     ->allocate_with_parcel
                                                                //     ->parcel_with_charges
                                                                //     // ->vendor_tracking_charges
                                                                //     )    
                                                                @endphp
                                                                @if ($item->allocate_with_parcel && $item->allocate_with_parcel->parcel_with_charges)
                                                                    <p id="tracking_charges_style">
                                                                        <button type="button"
                                                                            class="btn bg-primary text-white btn-sm disabled">
                                                                            {{ $item->allocate_with_parcel->parcel_with_charges->vendor_tracking_charges }}
                                                                        </button>
                                                                    </p>
                                                                @else
                                                              
                                                              
                                                                {{-- @php echo($item->id);  @endphp --}}
                                                                    <p id="trackingModal2_{{ $item->id }}">
                                                                        <a class="btn btn-outline-primary btn-sm charges_btn"
                                                                            title="add" data-bs-toggle="modal"
                                                                            data-bs-target="#vendor_charges_update"
                                                                            id="{{ $item->pl_id }}"
                                                                            data-pl-id="{{ $item->allocate_with_parcel->pl_id}}"
                                                                            data-vendor-id="{{ $item->vendor_id }}">
                                                                            update
                                                                        </a>
                                                                    </p>
                                                                @endif
                                                            </td>

                                                            <td id="deliver_status_btn_{{ $item->id }}">
                                                               
                                                                @if ($item->allocate_with_parcel->pl_status == 'delivered')
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm disabled">
                                                                        {{ $item->allocate_with_parcel->pl_status }}
                                                                    </button>
                                                                @else
                                                                    @if ($item->allocate_with_parcel && $item->allocate_with_parcel->parcel_with_charges  && $item->allocate_with_parcel->parcel_with_tracking )
                                                                        <a class="btn btn-outline-info btn-sm change_delivered_status"
                                                                            title="add"
                                                                            id="{{ $item->pl_id }}">
                                                                            Deliver
                                                                        </a>
                                                                    @endif 
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

                <form method="POST" id="vendor-tracking-charges">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Charges</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcel_id1" value="" id="parcel_id1"
                                    class="form-control" readonly>
                                <input type="hidden" name="pl_id1" value="" id="pl_id1"
                                    class="form-control">
                                <br> <input type="hidden" name="selected_vendor_id1" value=""
                                    id="selected_vendor_id1" class="form-control">
                            </td>
                            <td>
                                <input type="text" name="vendor_charges_id1" id="vendor_charges_id1"
                                    class="form-control" required>
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">

                        <button type="submit" form="vendor-tracking-charges" class="btn btn-primary "
                            id="modal_submit4" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close4"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<script>
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
                    console.log(data)
                    // $('#trackingModal_' + track_id).text(data.data.vendor_tracking_id);
                    $('#trackingModal_' + data.data.id).html(
                        '<button type="button" class="btn bg-success text-white btn-sm disabled">' +
                        data.data.vendor_tracking_id + '</button>');

                    toastr.success('record updated', 'success');
                    
                    $(':input', this).val('');
                    $('#trackingmodal').modal('hide');

                    // console.log(track_id);
                }

            }

        })
    });

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
                    $('#trackingModal2_'+ data.data.id).html(
                        '<button type="button" class="btn bg-primary text-white btn-sm disabled">' +
                        data.data.vendor_tracking_charges + '</button>');

                    toastr.success('record updated', 'success');
                    
                    $(':input', this).val('');
                    $('#vendor_charges_update').modal('hide');
                    // console.log(track_id);
                }

            }

        })
    });


    $('.tracking_btn').on('click', function(e) {
        e.preventDefault();
        // alert(1);
        pl_id = this.id;
       
        $('#pl_id').val(pl_id);
        $('#parcel_id').val($(this).data('pl-id'));
        $('#selected_vendor_id').val($(this).data('vendor-id'));

    });

    $('.charges_btn').on('click', function(e) {
        e.preventDefault();
        var pl_id1 = (this.id);
        // alert(pl_id1);
        $('#parcel_id1').val($(this).data('pl-id'));
        $('#pl_id1').val(pl_id1);
        $('#selected_vendor_id1').val($(this).data('vendor-id'));

    });


    $('.change_delivered_status').on('click', function(e) {
        e.preventDefault();
        var pl_id = (this.id);
        var el = $(this);
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
                        $('.change_delivered_status').empty();
                        console.log(data);
                        $('.change_delivered_status').append('Delivered');
                        $('#deliver_status_btn_' + pl_id).html(
                            '<button type="button" class="btn btn-danger btn-sm disabled">Delivered</button>'
                        );
                        // $('.delivered_status').addClass("bg-danger");

                    } else {
                        $('.delivered_status').empty();
                    }
                }
            });
        } else {
            $('.delivered_status').empty();
        }
    });
</script>
