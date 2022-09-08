@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <form id="form1" novalidate method="POST" action="{{ url('update-charges/' . $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Select Region</label>
                                    <select class="form-select" name="region_id" required
                                        class="form-control table-responsive @error('region_id') is-invalid @enderror"
                                        value="{{ $data->region_id}}">
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}"
                                                {{ $region->id == $data->region_id ? 'selected' : '' }}>
                                                {{ $region->name }}
                                                {{-- -{{ $country->charges }} --}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Select Region</label>
                                    <select class="form-select" name="country_id" required
                                        class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                        value="{{ $data->country_id}}">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ $country->id == $data->country_id ? 'selected' : '' }}>
                                                {{ $country->name }}
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
                                    <label for="useremail" class="form-label">Currency Name</label>
                                    <select class="form-select" name="currency_id" id="currency_id" required
                                        class="form-control table-responsive @error('currency_id') is-invalid @enderror"
                                        value="{{ old('currency_id') }}">
                                        @foreach ($currencies as $currrency)
                                            <option value="{{ $currrency->id }}"
                                                {{ $currrency->id == $data->currency_id ? 'selected' : '' }}>
                                                {{ $currrency->name }}
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
                                    <input type="text" name="symbol" id="symbol_id" class="form-control" value="{{$data->symbol}}"
                                        readonly>
                                    @error('region_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            {{-- row closed --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (0-500)gm </label>
                                    <input type="number" id="gm0_500" value="{{ $data->gm0_500 }}"
                                        class="form-control @error('gm0_500') is-invalid @enderror" name="gm0_500"
                                        value="{{ old('0_500g') }}" required autocomplete="gm0_500" autofocus>

                                    @error('gm0_500')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (501-1000)gm </label>
                                    <input type="number" id="gm501_1000"value="{{ $data->gm501_1000 }}"
                                        class="form-control @error('gm501_1000') is-invalid @enderror" name="gm501_1000"
                                        value="{{ old('gm501_1000') }}" required autocomplete="gm501_1000" autofocus>

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
                                    <input type="number" id="gm1001_1500" value="{{ $data->gm1001_1500 }}"
                                        class="form-control @error('gm1001_1500') is-invalid @enderror" name="gm1001_1500"
                                        value="{{ old('gm1001_1500') }}" required autocomplete="gm1001_1500" autofocus>

                                    @error('gm1001_1500')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (1501-2000)gm </label>
                                    <input type="number" id="gm1501_2000" value="{{ $data->gm1501_2000 }}"
                                        class="form-control @error('gm1501_2000') is-invalid @enderror" name="gm1501_2000"
                                        value="{{ old('gm1501_2000') }}" required autocomplete="gm1501_2000" autofocus>

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
                                    <input type="number" id="gm2001_5000" value="{{ $data->gm2001_5000 }}"
                                        class="form-control @error('gm2001_5000') is-invalid @enderror" name="gm2001_5000"
                                        value="{{ old('gm2001_5000') }}" required autocomplete="gm2001_5000" autofocus>

                                    @error('gm2001_5000')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (above-5000)gm </label>
                                    <input type="number" id="gm5000_above" value="{{ $data->gm5000_above }}"
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
                            {{-- row closed --}}
                            <hr>
                            <div class="col-md-6 mb-3">
                                <br>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Update Record</button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
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
                            $('#symbol_id').val(response['0']['symbol']);
                        }

                    });
                } else {

                }
            });
            //currency method closed here


        });
    </script>
@endsection
