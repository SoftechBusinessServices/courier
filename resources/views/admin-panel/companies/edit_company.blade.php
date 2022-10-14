@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="card">
                    <div class="card-title">
                        <div class="card-title">
                            <h4 class="my-2 text-center">Company Update Form</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!--write your code here  -->
                                <form id="form1" novalidate method="POST"
                                    action="{{ url('update-company/' . $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="username" class="form-label">Company Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ $data->name }}" required
                                                        autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="useremail" class="form-label">Company Email</label>
                                                    <input type="email" id="useremail"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ $data->email }}" autocomplete="email"
                                                        required>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="username" class="form-label">Company Phone Number</label>
                                                    <input type="text" data-inputmask="'mask': '0399-99999999'" required
                                                        type="number" maxlength="12"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        name="phone" value="{{ $data->phone }}" autocomplete="phone"
                                                        autofocus>

                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">First Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('fname') is-invalid @enderror"
                                                        name="fname" value="{{ $data->fname }}" required
                                                        autocomplete="fname" autofocus>

                                                    @error('fname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Last Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('lname') is-invalid @enderror"
                                                        name="lname" value="{{ $data->lname }}" required
                                                        autocomplete="fname" autofocus>

                                                    @error('lname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div> --}}
                                            </div>

                                            {{-- <div class="row">
                                               
                                            </div> --}}

                                            {{-- <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Company Website URL</label>
                                                    <input type="url" id="web_url" name="web_url" required
                                                        class="form-control @error('web_url') is-invalid @enderror"
                                                        value="{{ $data->web_url }}" required autocomplete="web_url"
                                                        autofocus>

                                                    @error('web_url')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Company NTN Number</label>
                                                    <input type="number" id="ntn_no"
                                                        class="form-control @error('ntn_no') is-invalid @enderror"
                                                        name="ntn_no" value="{{ $data->ntn_no }}" required
                                                        autocomplete="ntn_no" autofocus>

                                                    @error('ntn_no')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> --}}

                                            {{-- <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="address" class="form-label">Company Address</label>
                                                    <textarea name="address" id="address" class="form-control text-left" cols="1" rows="1">
                                                {{ $data->address }}
                                                </textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label"> Company's Country </label>
                                                    <select class="form-select" name="country_id" required class="form-control table-responsive @error('country_id') is-invalid @enderror value="{{ old('country_id') }}" >
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}"
                                                                {{ $country->id == $data->country_id ? 'selected' : '' }}>
                                                                {{ $country->name }}
                                                              
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('country_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div> --}}
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
