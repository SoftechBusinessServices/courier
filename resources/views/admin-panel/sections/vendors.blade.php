<!------------------Logistic Modal---------------------->
<div class="modal fade" id="logisticmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Logistics(Vendor) Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form2" novalidate method="POST" action="{{ route('store-logistic') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="username6" class="form-label">Vendor(Logistics) Name</label>
                                    <input type="text" placeholder="Enter vendor name"
                                        class="form-control @error('logistics_name') is-invalid @enderror"
                                        name="logistic_name" value="{{ old('logistic_name') }}" required
                                        autocomplete="logistic_name" autofocus>

                                    @error('logistic_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-12 mb-2">
                                    <label for="username6" class="form-label">Select Company Name</label>
                                    <select class="form-select" name="company_id" required id="company_id"
                                        class="form-control table-responsive @error('company_id') is-invalid @enderror"
                                        value="{{ old('company_id') }}">
                                        <option value="">Select One Company</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">
                                                {{ $company->name }}

                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="col-md-12 mb-2">
                                    <label for="useremail2" class="form-label">Vendor Email</label>
                                    <input type="email" placeholder="Enter Email address"
                                        class="form-control @error('vendor_email') is-invalid @enderror"
                                        name="vendor_email" value="{{ old('vendor_email') }}" autocomplete="email"
                                        required>

                                    @error('vendor_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="username7" class="form-label">Vendor Phone Number</label>
                                    <input type="text" data-inputmask="'mask': '0999-9999999999'" type="number"
                                        maxlength="15" class="form-control @error('vendor_phone') is-invalid @enderror"
                                        name="vendor_phone" value="{{ old('vendor_phone') }}" required
                                        autocomplete="vendor_phone" autofocus>

                                    @error('vendor_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="select2Multiple">Tag Services</label>
                                    <select class="select2-multiple form-control " name="service_id[]"
                                        multiple="multiple" style="width: 100%" id="select2Multiple">
                                        @foreach ($services as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->service_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="address" class="form-label">Vendor Address</label>
                                    <textarea name="vendor_address" id="vendor_address" class="form-control @error('company_phone') is-invalid @enderror"
                                        cols="1" rows="1">

                                    </textarea>
                                    @error('vendor_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
            </div>

            <div class="modal-footer">
                <!-- Toogle to second dialog -->
                <button type="submit" form="form2" class="btn btn-primary " id="modal_submit9"
                    value="Submit">Submit</button>
                <button type="button" class="btn btn-secondary" id="modal_close9"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </form>

    </div>
</div>


<!------------------Company Modal---------------------->
<div class="modal fade" id="companymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Company Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="companyform" novalidate method="POST" action="{{ route('store-company') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12 mb-3">
                                    <label for="username" class="form-label">Company Name</label>
                                    <input type="text" id="company_name" placeholder="Enter company name" required
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="useremail" class="form-label">Company Email</label>
                                    <input type="email" id="useremail" placeholder="Enter company email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- first row closed --}}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="username" class="form-label">Company Phone Number</label>
                            <input type="text" data-inputmask="'mask': '0399-99999999'" required type="number"
                                maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address" class="form-label">Company Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">
    
                        </textarea>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 mb-3">
                        <label for="username" class="form-label">Company NTN Number</label>
                        <input type="number" id="ntn_no" placeholder="Enter NTN Number" required
                            class="form-control @error('ntn_no') is-invalid @enderror" name="ntn_no"
                            value="{{ old('ntn_no') }}" required autocomplete="ntn_no" autofocus>

                        @error('ntn_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
            </div>
            {{-- <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="username" class="form-label">Company Website URL</label>
                        <input type="url" id="web_url" name="web_url" required
                            class="form-control @error('web_url') is-invalid @enderror"
                            value="{{ old('web_url') }}" required autocomplete="company_url"
                            autofocus>

                        @error('web_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="useremail" class="form-label">Select Country</label>
                        <select class="form-select" name="country_id" required
                            class="form-control table-responsive @error('country_id') is-invalid @enderror"
                            value="{{ old('country_id') }}">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">
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
                     --}}

            <button type="submit" form="companyform" class="btn btn-primary " id="modal_submit"
                value="Submit">Submit</button>
            <button type="button" class="btn btn-secondary" id="modal_close" data-bs-dismiss="modal">Close</button>
            </form>

        </div>
    </div>
</div>
</div>
