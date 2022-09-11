@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                {{-- @dd($data); --}}
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <form id="form1" novalidate method="POST" action="{{ url('update-parcel/' . $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Date</label>
                                    <input type="date" id="username" required
                                        class="form-control @error('pl_date') is-invalid @enderror" name="pl_date"
                                        value="{{ $data->pl_date }}" required autofocus>
                                    @error('pl_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Parcel Destination</label>
                                    <select class="form-select" name="country_id" required id="country_id"
                                        class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                        value="{{ old('country_id') }}">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ $country->id == $data->country_id ? 'selected' : '' }}>
                                                {{ $country->name }}
                                                {{-- -
                                                {{ $country->code }} --}}
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
                                    <input type="number" id="pl_weight" required
                                        class="form-control @error('pl_weight') is-invalid @enderror" name="pl_weight"
                                        value="{{ $data->pl_weight }}" required autocomplete="pl_weight" autofocus>
                                    @error('pl_weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Chargeable Weight</label>
                                    <input type="text" id="chargeable_weight" name="chargeable_weight"
                                        class="form-control" value="{{ $data->chargeable_weight }}">
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
                                    <div id="symbol_lable" class="d-inline text-danger">{{ $data->pl_symbol }}
                                    </div>
                                    <input type="hidden" name="pl_symbol" id="pl_symbol" value="{{ $data->pl_symbol }}">
                                    <input type="number" id="pl_cost" placeholder="Enter Parcel Cost" required
                                        class="form-control @error('pl_cost') is-invalid @enderror" name="pl_cost"
                                        value="{{ $data->pl_cost }}" required autocomplete="pl_cost" autofocus
                                        readonly>
                                    @error('pl_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Extras Cost</label>
                                    <input type="number" id="pl_extras" placeholder="Enter Parcel Extra Cost" required
                                        class="form-control @error('pl_extras') is-invalid @enderror" name="pl_extras"
                                        value="{{ $data->pl_extras }}" required autocomplete="pl_extras" autofocus
                                        >
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
                                    <input type="number" id="pl_discount" placeholder="Enter Parcel Discount" required
                                        class="form-control @error('pl_discount') is-invalid @enderror" name="pl_discount"
                                        value="{{ $data->pl_discount }}" required autocomplete="pl_discount" autofocus
                                        onblur="getAmount()">
                                    @error('pl_discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Final Cost</label>
                                    <input type="number" id="pl_final" placeholder="Parcel Final Charges" required
                                        class="form-control @error('pl_final') is-invalid @enderror" name="pl_final"
                                        value="{{ $data->pl_final }}" readonly autocomplete="pl_final" autofocus>
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
                                <input type="hidden" name="region_id" id="region_id" class="form-control"
                                    value="{{ $data->region_id }}" readonly>
                                {{-- @error('region_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                {{-- </div> --}}
                                {{-- <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Amounts in Currency
                                    </label> --}}
                                <input type="hidden" id="currency_id" class="form-control" autofocus name="currency_id"
                                    value="{{ $data->currency_id }}" readonly>

                                {{-- @error('currency_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                {{-- </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="address" class="form-label">Parcel Description</label>
                                    <textarea name="pl_description" id="pl_description" class="form-control" cols="1" rows="2">
                                    {{ $data->pl_description }}
                                    </textarea>
                                    @error('pl_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
                                        <button class="btn btn-primary" type="submit">Submit form</button>
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
        $(":input").inputmask();
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {

            var country_id = $('#country_id').val()
            // alert(country_id);

            if (country_id) {
                $.ajax({
                    url: "{{ url('/getSelectedShipping') }}/" + country_id,
                    type: "GET",
                    success: function(data) {
                        if (data) {
                            console.log(data);

                            $("#pl_weight").blur(function() {

                                var total_charges = 0;
                                var pl_weight = $('#pl_weight').val();
                                var pl_weight = parseInt(pl_weight);
                                // alert(pl_weight);

                                if (pl_weight > '0' && pl_weight <= '500') {
                                    // alert(1);
                                    var wt_charges = parseInt(data.gm0_500);
                                    alert(wt_charges);
                                    $('#chargeable_weight').val('500gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '500' && pl_weight <= '1000') {
                                    // alert(2);
                                    var wt_charges = parseInt(data.gm501_1000);
                                    alert(wt_charges);
                                    $('#chargeable_weight').val('1000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '1000' && pl_weight <= '1500') {
                                    // alert(3);
                                    var wt_charges = parseInt(data.gm1001_1500);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('1500gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '1500' && pl_weight <= '2000') {
                                    // alert(4);
                                    var wt_charges = parseInt(data.gm1501_2000);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('2000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '2000' && pl_weight <= '5000') {
                                    // alert(5);
                                    var wt_charges = parseInt(data.gm2001_5000);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('5000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '5000') {
                                    // alert(6);
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
        // without id-clicked function closed

        $('#country_id').on('change', function() {

                var country_id = $(this).val();
                alert("id is"+country_id)
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
            //country_id-changed function closed


        //read function closed
    </script>
@endsection
