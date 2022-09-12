@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Parcel Details
                                    <a href="{{ url('/prnpriview') }}" class="btn btn-info btn-sm ml-2">Print Preview</a>
                                </h4>
                                <p class="card-title-desc"><br>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        New Parcel
                                    </button>
                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Parcel_id</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Weight</th>
                                                <th>Chargeable</th>
                                                <th>Cost</th>
                                                <th>Extras</th>
                                                <th>Discount</th>
                                                <th>Final</th>
                                                <th>Delivery</th>
                                                <th>Description</th>
                                                <th>Parcel Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @if ($data->count() > 0)
                                                @foreach ($data as $item)
                                                    {{-- @dd($item) --}}
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->pl_id }}</td>
                                                        <td>{{ $item->region->name }}</td>
                                                        <td>{{ $item->country->name }}</td>
                                                        <td>{{ $item->currency->name }}</td>
                                                        <td>{{ $item->pl_weight }}</td>
                                                        <td>{{ $item->chargeable_weight }}</td>
                                                        {{-- <td>{{ $item->pl_currency }}</td> --}}
                                                        <td>{{ $item->pl_cost }}</td>
                                                        <td>{{ $item->pl_extras }}</td>
                                                        <td>{{ $item->pl_discount }}</td>
                                                        <td>{{ $item->pl_symbol . ' ' . $item->pl_final }}</td>

                                                        <td>{{ $item->pl_description }}</td>
                                                        <td>{{ $item->pl_status }}</td>
                                                        <td>
                                                            @php
                                                                $month = date('d/m/Y', strtotime($item->pl_date));
                                                                // dd($month);
                                                                echo $month;
                                                            @endphp
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td>
                                                        <td style="">
                                                            <a href="{{ url('print-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-dark btn-sm print" title="Print">
                                                                <i class="fas fa-regular fa-print"></i>
                                                            </a>

                                                            |<a href="{{ url('edit-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-danger btn-sm delete" title="Delete"
                                                                onclick="return confirm('Are you sure to delete Record?')">
                                                                <i class="fas fa-trash-alt"></i>
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
                                @endif
                            </div>

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transaction Modal -->
    <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
        aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transaction-detailModalLabel">Parcel Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                    <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p> --}}

                    <div class="table-responsive">

                        <table class="table align-middle table-nowrap">
                            <thead>

                            </thead>
                            <tbody>
                                <form id="form1" novalidate method="POST" action="{{ route('store-parcel') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="text-center">Parcel Registrations</h5>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Date</label>
                                                    <input type="date" id="username" required
                                                        class="form-control @error('pl_date') is-invalid @enderror"
                                                        name="pl_date" value="{{ old('pl_date') }}" required autofocus>

                                                    @error('pl_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label">Destination Country</label>
                                                    <select class="form-select" name="country_id" required id="country_id"
                                                        class="form-control table-responsive @error('country_id') is-invalid @enderror">
                                                        <option value="">-----</option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                                {{-- -{{ $country->charges }} --}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('country_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- first row closed --}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Weight
                                                        <code>(grams)</code></label>
                                                    <input type="number" id="pl_weight" placeholder="Enter Parcel Weight"
                                                        required
                                                        class="form-control @error('pl_weight') is-invalid @enderror"
                                                        name="pl_weight" value="{{ old('pl_weight') }}" required
                                                        autocomplete="pl_weight" autofocus>

                                                    @error('pl_weight')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Chargeable Weight</label>
                                                    <input type="text" id="chargeable_weight"
                                                        class="form-control @error('chargeable_weight') is-invalid @enderror"
                                                        name="chargeable_weight" required autocomplete="chargeable_weight"
                                                        autofocus readonly>

                                                    @error('chargeable_weight')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Cost in </label>
                                                    <div id="symbol_lable" class="d-inline text-danger">
                                                    </div>
                                                    <input type="hidden" name="pl_symbol" id="pl_symbol"
                                                        value="">
                                                    <div class="d-inline">
                                                        <input type="number" id="pl_cost"
                                                            placeholder="Enter Parcel Cost"
                                                            class="form-control @error('pl_cost') is-invalid @enderror"
                                                            name="pl_cost" required autocomplete="pl_cost" autofocus
                                                            readonly>

                                                        @error('pl_cost')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Extras Cost</label>
                                                    <input type="number" id="pl_extras"
                                                        placeholder="Enter Parcel Extra Cost" required
                                                        class="form-control @error('pl_extras') is-invalid @enderror"
                                                        name="pl_extras" value="{{ old('pl_extras') }}" required
                                                        autocomplete="pl_extras" autofocus>

                                                    @error('pl_extras')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Discount</label>
                                                    <input type="number" id="pl_discount"
                                                        placeholder="Enter Parcel Discount" required
                                                        class="form-control @error('pl_discount') is-invalid @enderror"
                                                        name="pl_discount" value="{{ old('pl_discount') }}" required
                                                        autocomplete="pl_discount" autofocus>

                                                    @error('pl_discount')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Parcel Final Cost</label>
                                                    <input type="number" id="pl_final"
                                                        placeholder="Parcel Final Charges" required
                                                        class="form-control @error('pl_final') is-invalid @enderror"
                                                        name="pl_final" value="{{ old('pl_final') }}" readonly
                                                        autocomplete="pl_final" autofocus>

                                                    @error('pl_final')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                {{-- <div class="col-md-6 mb-3"> --}}
                                                {{-- <label for="course" class="form-label">Selected --}}
                                                {{-- Region<code>*</code></label> --}}
                                                <input type="hidden" name="region_id" id="region_id"
                                                    class="form-control" value="" readonly>
                                                {{-- @error('region_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror --}}
                                                {{-- </div> --}}
                                                {{-- <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Amounts in Currency
                                                    </label> --}}
                                                <input type="hidden" id="currency_id" class="form-control" autofocus
                                                    name="currency_id" value="" readonly>

                                                {{-- @error('currency_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror --}}
                                                {{-- </div> --}}
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="address" class="form-label">Parcel Description</label>
                                                    <textarea name="pl_description" id="pl_description" class="form-control" cols="1" rows="1">
                                                    </textarea>
                                                    @error('pl_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <button type="submit" form="form1" class="btn btn-primary "
                                                id="modal_submit" value="Submit">Submit</button>
                                            <button type="button" class="btn btn-secondary" id="modal_close"
                                                data-bs-dismiss="modal">Close</button>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->

    <script>
        $(document).ready(function() {

            $('#country_id').on('change', function() {
                var country_id = $(this).val();

                if (country_id) {
                    $.ajax({
                        url: "{{ url('/getSelectedShipping') }}/" + country_id,
                        type: "GET",
                        success: function(data) {
                            if (data) {
                                console.log(data);
                                $('#region_id').val(data.region_id);
                                $('#currency_id').val(data.currency_id);
                                $('#pl_symbol').val(data.symbol);
                                $('#symbol_lable').text(data.symbol);

                                $("#pl_weight").blur(function() {
                                    // alert(23);
                                    var total_charges = 0;
                                    var pl_weight = $('#pl_weight').val();
                                    var pl_weight = parseInt(pl_weight);
                                    // alert(pl_weight);
                                    if (pl_weight > '0' && pl_weight <= '500') {

                                        var wt_charges = parseInt(data.gm0_500);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('500gm');
                                        $('#pl_cost').val(wt_charges);
                                    }
                                    if (pl_weight > '500' && pl_weight <= '1000') {

                                        var wt_charges = parseInt(data.gm501_1000);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('1000gm');
                                        $('#pl_cost').val(wt_charges);
                                    }
                                    if (pl_weight > '1000' && pl_weight <= '1500') {

                                        var wt_charges = parseInt(data.gm1001_1500);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('1500gm');
                                        $('#pl_cost').val(wt_charges);
                                    }
                                    if (pl_weight > '1500' && pl_weight <= '2000') {

                                        var wt_charges = parseInt(data.gm1501_2000);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('2000gm');
                                        $('#pl_cost').val(wt_charges);
                                    }
                                    if (pl_weight > '2000' && pl_weight <= '5000') {

                                        var wt_charges = parseInt(data.gm2001_5000);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('5000gm');
                                        $('#pl_cost').val(wt_charges);
                                    }
                                    if (pl_weight > '5000') {

                                        var wt_charges = parseInt(data.gm5000_above);
                                        // alert(wt_charges);
                                        $('#chargeable_weight').val('above 5000gm');
                                        $('#pl_cost').val(wt_charges);
                                    } else {

                                    }
                                }); // weight blur function closed

                                $("#pl_discount").blur(function() {

                                    var pl_cost = parseInt($('#pl_cost').val());
                                    var pl_extras = parseInt($('#pl_extras').val());
                                    var pl_discount = parseInt($('#pl_discount').val());
                                    var pl_total = (pl_cost + pl_extras) - pl_discount;
                                    $('#pl_final').val(pl_total);

                                }); // discount blur function closed

                            } else {
                                alert('data not found');

                            }
                        }
                    });
                }
            });
            //country_id function closed

        });
    </script>

@endsection
