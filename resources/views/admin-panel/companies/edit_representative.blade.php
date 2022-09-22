@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="card">
                    <div class="card-title">
                        <h4 class="my-2 text-center">Representative Update Form</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!--write your code here  -->
                                <form id="form1" novalidate method="POST"
                                    action="{{ url('update-representator/' . $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Representative Name</label>
                                                    <input type="text" id="username"
                                                        class="form-control @error('fname') is-invalid @enderror"
                                                        name="name" value="{{ $data->represent_name }}" required
                                                        autocomplete="represent_name" autofocus>
                                                    <input type="hidden" name="company_id" id="company_id" value="{{ $data->company_id }}">
                                                    @error('represent_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="useremail" class="form-label">Representative Email</label>
                                                    <input type="email" id="useremail"
                                                        class="form-control @error('represent_email') is-invalid @enderror"
                                                        name="email" value="{{ $data->represent_email }}" autocomplete="represent_email"
                                                        required>

                                                    @error('represent_email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="username" class="form-label">Representative Phone
                                                        Number</label>
                                                    <input type="text" data-inputmask="'mask': '0399-99999999'" required
                                                        type="number" maxlength="12"
                                                        class="form-control @error('represent_phone') is-invalid @enderror"
                                                        name="phone" value="{{ $data->represent_phone }}" autocomplete="phone"
                                                        autofocus>

                                                    @error('represent_phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="address" class="form-label">Company Address</label>
                                                    <textarea name="address" id="represent_address" class="form-control text-left" cols="1" rows="1">
                                                {{ $data->represent_address }}
                                                </textarea>
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
