@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="card">
                    <div class="card-title">
                        <h4 class="my-2 text-center">Logistics Update Form</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!--write your code here  -->
                                <form id="form1" novalidate method="POST"
                                    action="{{ url('update-logistic/' . $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Logistic Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('logistic_name') is-invalid @enderror"
                                                        name="logistic_name" value="{{ $data->logistic_name }}" required
                                                        autocomplete="represent_name" autofocus>
                                                    @error('logistic_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Vendor Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('vendor_name') is-invalid @enderror"
                                                        name="vendor_name" value="{{ $data->vendor_name }}" required
                                                        autocomplete="represent_name" autofocus>
                                                    @error('vendor_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label">Vendor Email</label>
                                                    <input type="email" id="useremail"
                                                        class="form-control @error('vendor_email') is-invalid @enderror"
                                                        name="vendor_email" value="{{ $data->vendor_email }}"
                                                        autocomplete="represent_email" required>

                                                    @error('vendor_email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Vendor Phone
                                                        Number</label>
                                                    <input type="text" data-inputmask="'mask': '0399-99999999'" required
                                                        type="number" maxlength="12"
                                                        class="form-control @error('vendor_phone') is-invalid @enderror"
                                                        name="vendor_phone" value="{{ $data->vendor_phone }}"
                                                        autocomplete="phone" autofocus>

                                                    @error('vendor_phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="address" class="form-label">Company Address</label>
                                                    <textarea name="vendor_address" id="vendor_address" class="form-control text-left" cols="1" rows="1">
                                                {{ $data->vendor_address }}
                                                </textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label">Select Country</label>
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
                                                    @error('region_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <hr>
                                            <div class="col-md-6 mb-0">
                                                <br>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="invalidCheck" required>
                                                    <label class="form-check-label" for="invalidCheck">
                                                        Agree to terms and conditions
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary" type="submit">Submit
                                                        form</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- card -->
            </div>
        </div>
    </div>
@endsection
