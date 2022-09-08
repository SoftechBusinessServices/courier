@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

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
                                    <select class="form-select" name="country_id" required
                                        class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                        value="{{ old('country_id') }}">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ $country->id == $data->country_id ? 'selected' : '' }}>
                                                {{ $country->name }} -
                                                {{ $country->code }}</option>
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
                                        <code>(10/KG)</code></label>
                                    <input type="number" id="pl_weight" required
                                        class="form-control @error('company_ntn') is-invalid @enderror" name="pl_weight"
                                        value="{{ $data->pl_weight }}" required autocomplete="pl_weight" autofocus
                                        onblur="getAmount()">
                                    @error('pl_weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Weight Charges</label>
                                    <input type="number" id="pl_charges"required
                                        class="form-control @error('pl_charges') is-invalid @enderror" name="pl_charges"
                                        value="{{ $data->pl_charges }}" required autocomplete="pl_charges" autofocus
                                        onblur="getAmount()">
                                    @error('pl_charges')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Cost</label>
                                    <input type="number" id="pl_cost" placeholder="Enter Parcel Cost" required
                                        class="form-control @error('pl_cost') is-invalid @enderror" name="pl_cost"
                                        value="{{ $data->pl_cost }}" required autocomplete="pl_cost" autofocus
                                        onblur="getAmount()">
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
                                        onblur="getAmount()">
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
        function getAmount() {

            var rate, weight, charges, pl_cost, pl_extra, pl_discount, pl_final;
            var rate = 10;
            var weight = $('#pl_weight').val();

            $('#pl_charges').val(rate * weight);

            var pl_charges = parseInt($('#pl_charges').val());
            // alert(pl_charges);
            var pl_extras = parseInt($('#pl_extras').val());
            var pl_cost = parseInt($('#pl_cost').val());
            var pl_discount = parseInt($('#pl_discount').val());
            // alert(pl_charges + pl_cost + pl_extras + pl_discount);

            $('#pl_final').val((pl_charges + pl_cost + pl_extras) - pl_discount);

        }
    </script>
@endsection
