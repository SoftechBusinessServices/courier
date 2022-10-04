@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <form id="form1" novalidate method="POST" action="{{ url('update-customer/' . $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="useremail" class="form-label">Choose Company ss</label>
                                            <select class="form-select" name="company_id" required
                                                class="form-control table-responsive @error('company_id') is-invalid @enderror"
                                                value="{{ old('company_id') }}">
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}"
                                                        {{ $company->id == $data->company_id ? 'selected' : '' }}>
                                                        {{ $company->name }}
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
                                            <label for="username" class="form-label">Customer Name</label>
                                            <input type="text" id="username"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $data->name }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="username" class="form-label">Customer Phone Number</label>
                                            <input type="text" data-inputmask="'mask': '0399-99999999'" required
                                                type="number" maxlength="12"
                                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                value="{{ $data->phone }}" autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="useremail" class="form-label">Customer Email</label>
                                            <input type="email" id="useremail"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $data->email }}" autocomplete="email" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- first row closed --}}
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="useremail" class="form-label">Select One Country</label>
                                            <select class="form-select" name="country_id" required
                                                class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                                value="{{ old('country_id') }}">
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        {{ $country->id == $data->country_id ? 'selected' : '' }}>
                                                        {{ $country->name }}
                                                        {{-- -{{ $country->code }} --}}
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
                                            <label for="username" class="form-label">Customer CNIC Number</label>
                                            <input type="text" data-inputmask="'mask': '99999-9999999-9'"
                                                placeholder="XXXXX-XXXXXXX-X" name="cnic_no" required
                                                class="form-control @error('cnic_no') is-invalid @enderror"
                                                value="{{ $data->cnic_no }}" required autocomplete="cnic_no" autofocus>

                                            @error('cnic_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="username" class="form-label">Upload CNIC Picture</label>
                                            <input type="file" id="cnic_scane" required name="cnic_scane"
                                                class="form-control @error('cnic_scane') is-invalid @enderror"
                                                autocomplete="cnic_scane" autofocus>

                                            @error('cnic_scane')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                         <div class="col-md-6 mb-3">
                                            <label for="username" class="form-label">Old CNIC Picture</label>
                                            <img src="{{ asset('uploads/customers/cnic/' . $data->cnic_scane) }}" alt=""
                                                id="admin-img" width="50px" class="ml-3">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="form-label">Customer Address</label>
                                            <textarea name="address" id="address" class="form-control" cols="1" rows="2">
                                        {{ $data->address }}
                                        </textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
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
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
