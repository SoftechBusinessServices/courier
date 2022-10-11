<!------------------Allocate Modal---------------------->
<div class="modal fade" id="allocatemodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Allocate Your Parcel to a Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-allocate') }}" method="POST" id="allocateform" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="">Parcel ID</label>
                            <input type="hidden" name="parcell_id" value="" id="parcell_id" class="form-control" readonly>
                            <input type="text" name="parcell_id2" value="" id="parcell_id2" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="course" class="form-label">Select Vendor for Service </label>
                            <select class="form-control" name="vendor_id" id="vendor_id"></select>
                            @error('vendor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <label for="">Service Used</label> --}}
                            <input type="hidden" name="service_used_id" value="" id="service_used_id" class="form-control">
                        </div>

                    </div>
                    {{-- <div id='order-id'></div>
                    <div id='prod-id'></div> --}}


                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="allocateform" class="btn btn-primary " id="modal_submit2" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close2" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<div class="container">
        <div class="collapse" id="processtable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12 px-0">
                        <!--write your code here  -->

                        <div class="card px-0">
                            <div class="card-body bg-light border rounded px-0">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Processed Parcels</h5>
                                    <a class="btn-close" data-toggle="collapse"  href="#processtable" role="button" aria-expanded="false" aria-controls="collapseExample"><span aria-hidden="true"></span></a>
                                </div>

                                @if (isset($processed_parcels))
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Parcel ID</th>
                                                <th>Parcel<br>Destination</th>
                                                <th>Despatch<br>Date</th>
                                                <th>Weight <br>(kilogram)</th>
                                                <th>Parcel <br>Charges</th>
                                                <th>Required<br>Service</th>
                                                <th>Print<br>Options</th>
                                                <th>Parcel<br>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @if ($processed_parcels->count() > 0)
                                            @foreach ($processed_parcels as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                    </a>
                                                </td>
                                                <td>{{ $item->country->name}}</td>
                                             
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td> {{ $item->pl_weight }} </td>
                                                <td> {{ $item->pl_final }} </td>
                                                <td> {{ $item->parcel_service->service_name }} </td>
                                                <td>
                                                    <a href="{{ url('/dispatch-notes-print-view') }}" class="btn btn-success waves-effect waves-light me-1 btn-sm"><i class="fa fa-print">Notes</i></a>
                                                    |
                                                    <a href="{{ url('/customer-receipt-print-view') }}" class="btn btn-info waves-effect waves-light me-1 btn-sm"><i class="fa fa-print">Receipt</i></a>
                                                </td>
                                                <td>
                                                    <a id="todolink" class="btn btn-outline-info btn-sm parcel_allocate" title="add" data-bs-toggle="modal" data-bs-target="#allocatemodal" href="#allocatemodal" data-id="{{ $item->id }}" data-pl-id ="{{$item->pl_id}}" data-prod-id="{{ $item->service_id }}">
                                                        Allocate
                                                    </a>
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


<script>
    $(document).ready(function() {

        $('.parcel_allocate').on('click', function(e) {
            e.preventDefault();

            $('#parcell_id').val($(this).data('id'));
            $('#parcell_id2').val($(this).data('pl-id'));
            // alert(data.id);
            $('#service_used_id').val($(this).data('prod-id'));

            var pl_id = ($(this).data('id'));
            var service_id = ($(this).data('prod-id'));
            // alert(pl_id);
            // alert(service_id);
            if (service_id) {

                $.ajax({
                    url: "{{ url('/getSelected') }}/" + service_id,
                    type: "GET",
                    //    data : {"_token":"{{ csrf_token() }}"},
                    //    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('#vendor_id').empty();
                            $('#vendor_id').append(
                                '<option hidden>Choose Vendor</option>');
                            $.each(data, function(key, course) {
                                $('select[name="vendor_id"]').append(
                                    '<option value="' + course.id +
                                    '">' + course.logistic_name +
                                    '</option>');
                            });
                        } else {
                            $('#vendor_id').empty();
                        }
                    }
                });
            } else {
                $('#vendor_id').empty();
            }

        });

    });
</script>