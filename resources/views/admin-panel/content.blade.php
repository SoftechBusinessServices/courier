<div class="page-content px-5" style="padding:0; padding-top:6%;">
    <div class="page-title-box d-sm-flex  justify-content-left  ">
        <h4 class="mb-sm-0 font-size-18"><a href="{{ route('home') }}">Dashboard</a></h4>
    </div>

    <!-- fist container  -->
    <div class="row gx-5 mb-2">
        <!-- Parcel  -->
        <div class="col ">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/parcel-new.png') }}" alt="">

                            <h3 class="mb-0 mt-2">New Parcels</h3>
                        </a>

                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center">
                        <a class="btn btn-primary btn-md text-white waves-effect waves-light " data-bs-toggle="modal"
                            data-bs-target="#parcelmodal">Add
                            Parcel </a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Processed -->
        <div class="col">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/parcel-processed.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Processed</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center d-flex flex-direction-column">
                        <!-- add customer  -->
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample">Processed
                            Parcels</a>


                    </div>
                </div>
            </div>
        </div>

        <!-- Allocated -->
        <div class="col">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/allocated.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Allocated</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center">
                        <a href="add-suppliers.html"> <button type="button" class="btn btn-primary btn-md">Allocated
                                Parcels</button></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Payments -->
        <div class="col">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body p-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/payments.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Payments</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center">
                        <a href="add-suppliers.html"> <button type="button"
                                class="btn btn-primary btn-md">Payments</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row1 closed -->


    <!--processed collapsed table  -->
    <div class="container">
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <h4 class="card-title-desc text-dark ">
                                    Procssed Orders
                                </h4>
                                @if (isset($regions))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Parcel ID</th>
                                                <th>Parcel Destination</th>
                                                <th>Despatch Date</th>
                                                {{-- <th>Subcategories</th> --}}
                                                <th>Parcel Wieght(kg)</th>
                                                <th>Parcel Charges</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @if ($regions->count() > 0)
                                                @foreach ($regions as $item)
                                                    <tr>
                                                        <td>{{ $i++ }} <a
                                                                href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-secondary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a> </td>
                                                        <td>{{ $item->name }}</td>
                                                        <td> 02/02/02 </td>
                                                        <td> 02 </td>
                                                        <td> 02 </td>
                                                        <td> <button type="button"
                                                                class="btn btn-outline-info btn-sm">Allocate</button>
                                                        </td>
                                                        <td style="">


                                                            <a href="{{ url('edit-region/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm delete"
                                                                title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-region/' . $item->id) }}"
                                                                class="btn btn-outline-danger btn-sm delete"
                                                                title="Delete"
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
    <!-- table collapsed closed -->


    <!-- Setting container -->
    <div class="page-content" style="padding:0;  padding-top:2%;">
        <div class=" border bg-light">
            <div class="modal modal-alert position-static d-block  " tabindex="-1" role="dialog" id="modalChoice">
                <div class="modal-body  text-center">
                    <a href="#" class="nav-link text-dark">
                        <img src="{{ asset('assets/images/setting.png') }}" alt="">

                        <h3 class="">Setting </h3>
                    </a>
                </div>

                <div class="row gx-5">
                    <div class="col  ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body  text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/user.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Users</h3>
                                </a>
                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                    data-bs-target="#usermodal">Add
                                    User </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-user') }}">Users
                                    List
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body  text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/customers.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Customers</h3>
                                </a>
                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                    data-bs-target="#companymodal">Add
                                    Customer </a>
                                <a class="btn btn-success btn-md text-white "
                                    href="{{ route('add-company') }}">Companies List
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Users Closed -->

                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/vendor.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Vendors</h3>
                                </a>

                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                    data-bs-target="#logisticmodal">Add
                                    Vendor </a>
                                <a href="{{ route('add-logistic') }}"
                                    class="btn btn-success btn-md text-white ">Vendors List
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- customers closed -->

                    <!-- Regions  -->
                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body  text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/region.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Regions</h3>
                                </a>

                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                    data-bs-target="#regionmodal">Add
                                    Region </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-region') }}">Regions
                                    List
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Regions closed -->

                    <!--Services  -->
                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body  text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/services.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Services</h3>
                                </a>

                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                    data-bs-target="#servicemodal">Add
                                    Region </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-region') }}">Regions
                                    List
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Services closed -->

                </div>
            </div>
        </div>
    </div>
    <!-- Row2 closed -->

</div>

<!------------------User Modal---------------------->

<div class="modal fade" id="usermodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">User Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userform" class="needs-validation" novalidate method="POST"
                    action="{{ route('store-user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" placeholder="Enter username" required
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email</label>
                        <input type="email" id="useremail" placeholder="Enter email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="userpassword" class="form-label">{{ __('Password') }}</label>
                        <div class="input-group auth-pass-inputgroup">
                            <input type="password" id="userpassword"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="new-password" placeholder="Enter password"
                                value="{{ old('password') }}" required>
                            <button class="btn btn-light " type="button" id="password-addon"><i
                                    class="mdi mdi-eye-outline"></i></button>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="userpassword" for="password-confirm"
                            class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password"
                            value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="userform" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!------------------Region Modal---------------------->
<div class="modal fade" id="regionmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Region Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="regionform" action="{{ route('store-region') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Enter Region Name</label>
                            <input type="text" id="username" placeholder="Enter customer name"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <!-- Toogle to second dialog -->
                            <button type="submit" form="regionform" class="btn btn-primary " id="modal_submit"
                                value="Submit">Submit</button>
                            <button type="button" class="btn btn-secondary" id="modal_close1"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!------------------Vendor Modal---------------------->
<div class="modal fade" id="logisticmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logistics Vendor Registration</h5>
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
                                    <label for="username" class="form-label">Logistics Name</label>
                                    <input type="text" id="username" placeholder="Enter logistic name"
                                        class="form-control @error('logistics_name') is-invalid @enderror"
                                        name="logistic_name" value="{{ old('logistic_name') }}" required
                                        autocomplete="logistic_name" autofocus>

                                    @error('logistic_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="username" class="form-label">Vendor Name</label>
                                    <input type="text" id="username" placeholder="Enter Vendor name"
                                        class="form-control @error('vendor_name') is-invalid @enderror"
                                        name="vendor_name" value="{{ old('vendor_name') }}" required
                                        autocomplete="vendor_name" autofocus>

                                    @error('vendor_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="useremail" class="form-label">Vendor Email</label>
                                    <input type="email" id="useremail" placeholder="Enter Email address"
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
                        </div>
                    </div>

                    {{-- first row closed --}}
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label for="username" class="form-label">Vendor Phone Number</label>
                            <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                maxlength="12" class="form-control @error('vendor_phone') is-invalid @enderror"
                                name="vendor_phone" value="{{ old('vendor_phone') }}" required
                                autocomplete="vendor_phone" autofocus>

                            @error('vendor_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="address" class="form-label">Vendor Address</label>
                            <textarea name="vendor_address" id="vendor_address" class="form-control" cols="1" rows="1">

                        </textarea>
                            @error('vendor_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="form2" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!------------------Service Modal---------------------->
<div class="modal fade" id="servicemodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Services Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="serviceform" action="{{ route('store-service') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Enter Service Name</label>
                            <input type="text" id="username" placeholder="Enter service name"
                                class="form-control @error('service_name') is-invalid @enderror" name="service_name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('service_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <!-- Toogle to second dialog -->
                            <button type="submit" form="serviceform" class="btn btn-primary " id="modal_submit"
                                value="Submit">Submit</button>
                            <button type="button" class="btn btn-secondary" id="modal_close1"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!------------------Parcel Modal---------------------->
<div class="modal fade " id="parcelmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Parcel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <div id="basic-example">
                    <h3><span>Shipper Info</span> </h3>
                    <section>
                        <form id="form1" novalidate method="POST" action="{{ route('store-parcel') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Tracking ID</label>
                                    <input type="text" id="username" required
                                        class="form-control @error('pl_id') is-invalid @enderror" name="pl_id"
                                        value="{{ old('pl_id') }}" autofocus readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Parcel Date</label>
                                    <input type="date" id="username" required
                                        class="form-control @error('pl_date') is-invalid @enderror" name="pl_date"
                                        value="{{ old('pl_date') }}" required autofocus>

                                    @error('pl_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Shipper Phone
                                        Number</label>
                                    <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                        maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                        autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="chkPassport">
                                        <input type="checkbox" id="chkPassport" />
                                        Add New Shipper?
                                    </label>

                                </div>
                                <div id="dvAddShipper" style="display: none">
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="username" class="form-label">Company
                                                Name</label>
                                            <input type="text" id="username" placeholder="Company Name" required
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="username" class="form-label">Contact
                                                Person</label>
                                            <input type="text" data-inputmask="'mask': '0399-99999999'"
                                                type="number" maxlength="12"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" value="{{ old('phone') }}" required
                                                autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">Address
                                                Line1:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">Address
                                                Line2:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">City:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">State/
                                                Province /Region:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="basicpill-phoneno-input">ZIP:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">

                                        </div>
                                        <div class="col-lg-6">

                                            <label for="basicpill-phoneno-input">Country:</label>
                                            <input type="text" class="form-control" name="shipper_add1"
                                                id="basicpill-phoneno-input">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <h3><span>Consignee</span></h3>
                    <section>
                        <form>
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="username" class="form-label">Receiver
                                        Name</label>
                                    <input type="text" id="username" placeholder="Receiver Name" required
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Receiver Phone
                                        Number</label>
                                    <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                        maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                                        autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="chkCompany">
                                        <input type="checkbox" id="chkCompany" />
                                        Is it Business?
                                    </label>
                                    <div id="dvCompany" style="display: none">

                                        <input type="text" class="form-control" id="txtPassportNumber"
                                            placeholder="Business Title" />
                                    </div>

                                    </option>

                                    </select>
                                    @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Parcel Address</label>
                                    <input type="text" id="username" placeholder="Receiver  Address" required
                                        class="form-control @error('pl_address') is-invalid @enderror"
                                        name="pl_address" value="{{ old('pl_address') }}" required
                                        autocomplete="name" autofocus>

                                    @error('pl_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">Address
                                        Line1:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">
                                </div>
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">Address
                                        Line2:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">City:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">
                                </div>

                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">State/
                                        Province /Region:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">ZIP:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">
                                </div>
                                <div class="col-lg-6">
                                    <label for="basicpill-phoneno-input">Country:</label>
                                    <input type="text" class="form-control" name="shipper_add1"
                                        id="basicpill-phoneno-input">
                                </div>
                            </div>
                        </form>
                    </section>

                    <h3>Parcel Details</h3>
                    <section>
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">No of Boxes</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Weight in <span
                                                class="text-danger text-ecnter">KG</span></label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Charges</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Extras</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Discount</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Final Charges</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Parcel Description</label>
                                        <textarea name="pl_description" id="pl_description" cols="1" rows="3" class="form-control">
                                       </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <!-- Confirm Details -->
                    <h3>Dispatch Note</h3>
                    <section>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Dispatch Note</h4>
                                        <form class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">

                                                    <div class="mb-3 col-lg-2">
                                                        <label for="name">Contents</label>
                                                        <input type="text" id="name" name="untyped-input"
                                                            class="form-control" />
                                                    </div>


                                                    <div class="mb-3 col-lg-2">
                                                        <label for="subject">QTY</label>
                                                        <input type="number" id="subject" class="form-control" />
                                                    </div>

                                                    <div class="mb-3 col-lg-2">
                                                        <label for="resume">Price</label>
                                                        <input type="number" class="form-control" id="resume">
                                                    </div>

                                                    <div class="mb-3 col-lg-2">
                                                        <label for="message">Currency</label>
                                                        <select name="currency" id="currency" class="form-control">

                                                            <option value="pkr">PKR</option>
                                                            <option value="usd">USD</option>
                                                            <option value="euro">Euro</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3 col-lg-2">
                                                        <label for="resume">Total</label>
                                                        <input type="number" class="form-control" id="resume">
                                                    </div>
                                                    <div class="col-lg-2 align-self-center">
                                                        <div class="d-grid">
                                                            <input data-repeater-delete type="button"
                                                                class="btn btn-primary" value="Delete" />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button"
                                                class="btn btn-success mt-3 mt-lg-0" value="Add" />

                                            <div class="row mt-5">
                                                <div class="col-md-6">
                                                    <input type="checkbox" name="check_print" value="Orange">Do you
                                                    want
                                                    to Print?
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>




<!---------------------- JAVASCRIPT-------------------->
<script>
    $(document).ready(function() {

        $(function() {
            $("#chkPassport").click(function() {
                if ($(this).is(":checked")) {
                    $("#dvAddShipper").show();
                } else {
                    $("#dvAddShipper").hide();
                }
            });
        });

        $(function() {
            $("#chkCompany").click(function() {
                if ($(this).is(":checked")) {
                    $("#dvCompany").show();
                } else {
                    $("#dvCompany").hide();
                }
            });
        });


    }); //ready function closed
</script>
