@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Shipping Charges Details
                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm ml-2">Home</a>
                                    {{-- <button type="button"
                                        class="btn btn-success btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        New Country
                                    </button> --}}
                                    <a href="{{ url('/print_view') }}" class="btn btn-info btn-sm ml-2">Print Preview</a>
                                </h4>
                                <p class="card-title-desc"><br>
                                    <!-- Button trigger modal -->

                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Currency</th>
                                                <th>Symbol</th>
                                                <th>(0-500)gm</th>
                                                <th>(501-1000)gm</th>
                                                <th>(1001-1500)gm</th>
                                                <th>(1501-2000)gm</th>
                                                <th>(2001-5000)gm</th>
                                                <th>(above-5000)gm</th>
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
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->region->name }}</td>
                                                        <td>{{ $item->country->name }}</td>
                                                        <td>{{ $item->currency->name }}</td>
                                                        <td>{{ $item->symbol }}</td>
                                                        <td>{{ $item->gm0_500 }}</td>
                                                        <td>{{ $item->gm501_1000 }}</td>
                                                        <td>{{ $item->gm1001_1500 }}</td>
                                                        <td>{{ $item->gm1501_2000 }}</td>
                                                        <td>{{ $item->gm2001_5000 }}</td>
                                                        <td>{{ $item->gm5000_above }}</td>
                                                        <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td>
                                                        </td>

                                                        <td style="width: 100px">
                                                            <a href="{{ url('edit-charges/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-charges/' . $item->id) }}"
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
                    <h5 class="modal-title" id="transaction-detailModalLabel">Charges Rate Registration</h5>
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
                                <form id="form1" novalidate method="POST" action="{{ route('store-charges') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row">
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
                                                <div class="col-md-6 mb-3">
                                                    <label for="course" class="form-label">Destination Region
                                                        <code>*</code></label>
                                                    <select class="form-control" name="region_id" id="region_id">

                                                    </select>
                                                    @error('region_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            {{-- first row closed --}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label">Desired Currency</label>
                                                    <select class="form-select" name="currency_id" required id="currency_id"
                                                        class="form-control table-responsive @error('currency_id') is-invalid @enderror">
                                                        <option value="">-----</option>
                                                        @foreach ($currencies as $currency)
                                                            <option value="{{ $currency->id }}">{{ $currency->name }}
                                                                {{-- -{{ $country->charges }} --}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('currency_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="course" class="form-label">Desired
                                                        Symbol<code>*</code></label>
                                                    <input type="text" name="symbol" id="symbol_id" class="form-control"
                                                        value="" readonly>
                                                    @error('symbol_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Currency Name</label>
                                                    <input type="text" id="username" placeholder="Enter currency name"
                                                        required
                                                        class="form-control @error('currency') is-invalid @enderror"
                                                        name="currency" value="{{ old('currency') }}" required
                                                        autocomplete="currency" autofocus>
                                                    @error('currency')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                                {{-- <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Currency Symbol</label>
                                                    <input type="text" id="username" placeholder="Enter Currency Symbol"
                                                        required class="form-control @error('symbol') is-invalid @enderror"
                                                        name="symbol" value="{{ old('symbol') }}" required
                                                        autocomplete="symbol" autofocus>
                                                    @error('symbol')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                            </div>
                                            {{-- row closed --}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (0-500)gm </label>
                                                    <input type="number" id="gm0_500"
                                                        placeholder="Enter Price for (0-500)gm " required
                                                        class="form-control @error('gm0_500') is-invalid @enderror"
                                                        name="gm0_500" value="{{ old('0_500g') }}" required
                                                        autocomplete="gm0_500" autofocus>

                                                    @error('gm0_500')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (501-1000)gm </label>
                                                    <input type="number" id="gm501_1000"
                                                        placeholder="Enter Price for (501-1000)gm " required
                                                        class="form-control @error('gm501_1000') is-invalid @enderror"
                                                        name="gm501_1000" value="{{ old('gm501_1000') }}" required
                                                        autocomplete="gm501_1000" autofocus>

                                                    @error('gm501_1000')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- row closed --}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (1001-1500)gm </label>
                                                    <input type="number" id="gm1001_1500"
                                                        placeholder="Enter Price for (1001-1500)gm " required
                                                        class="form-control @error('gm1001_1500') is-invalid @enderror"
                                                        name="gm1001_1500" value="{{ old('gm1001_1500') }}" required
                                                        autocomplete="gm1001_1500" autofocus>

                                                    @error('gm1001_1500')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (1501-2000)gm </label>
                                                    <input type="number" id="gm1501_2000"
                                                        placeholder="Enter Price for (1501-2000)gm " required
                                                        class="form-control @error('gm1501_2000') is-invalid @enderror"
                                                        name="gm1501_2000" value="{{ old('gm1501_2000') }}" required
                                                        autocomplete="gm1501_2000" autofocus>

                                                    @error('gm1501_2000')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- row closed --}}
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (2001-5000)gm </label>
                                                    <input type="number" id="gm2001_5000"
                                                        placeholder="Enter Price for (2001-5000)gm " required
                                                        class="form-control @error('gm2001_5000') is-invalid @enderror"
                                                        name="gm2001_5000" value="{{ old('gm2001_5000') }}" required
                                                        autocomplete="gm2001_5000" autofocus>

                                                    @error('gm2001_5000')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Weight (above-5000)gm
                                                    </label>
                                                    <input type="number" id="gm5000_above"
                                                        placeholder="Enter Price for (above-2000)gm " required
                                                        class="form-control @error('gm5000_above') is-invalid @enderror"
                                                        name="gm5000_above" value="{{ old('gm5000_above') }}" required
                                                        autocomplete="gm5000_above" autofocus>

                                                    @error('gm5000_above')
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

                if (region_id) {
                    $.ajax({
                        url: "{{ url('/getSelected') }}/" + country_id,
                        type: "GET",
                        success: function(data) {
                            if (data) {
                                console.log(data);
                                $("#region_id").html(data);
                            } else {
                                $('#region_id').empty();
                            }
                        }
                    });
                } else {
                    $('#region_id').empty();
                }
            });

            //currency method starts
            $('#currency_id').on('click', function() {
                var currency_id = $(this).val();
                console.log(currency_id);
                if (currency_id) {
                    $.ajax({
                        url: "{{ url('/getCurrency') }}/" +
                            currency_id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        dataType: "json",

                        success: function(response) {
                            console.log(response);
                            //   alert(response['0']['name']);
                            $('#symbol_id').val(response['0'][
                                'symbol'
                            ]);
                        }

                    });
                } else {

                }
            });

        });
    </script>
@endsection
