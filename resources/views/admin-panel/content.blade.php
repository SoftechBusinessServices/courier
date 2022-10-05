<div class="page-content px-5" style="padding:0; padding-top:88px;">
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
                        <a class="btn btn-primary btn-md text-white waves-effect waves-light " data-bs-toggle="modal" data-bs-target="#parcelmodal">Add
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
                        <a class="btn btn-primary" data-toggle="collapse" href="#processtable" role="button" aria-expanded="false" aria-controls="collapseExample">Processed
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
                    <div class="modal-footer flex-nowrap p-0 justify-content-center d-flex flex-direction-column">
                        <!-- add customer  -->
                        <a class="btn btn-primary" data-toggle="collapse" href="#allocatetable" role="button" aria-expanded="false" aria-controls="collapseExample">Allocated
                            Parcels</a>


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
                        <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#paymentmodal">Payment Details </a>
                        {{-- <a class="btn btn-success btn-md text-white" href="{{ route('add-user') }}">Payment List

                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row1 closed -->


    <div class="container">
        <div class="collapse" id="processtable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body bg-light border rounded">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Processed Parcels</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                @if (isset($processed_parcels))
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>S.No</th>
                                            <th>Parcel ID</th>
                                            <th>Parcel<br>Destination</th>
                                            <th>Despatch<br>Date</th>
                                            {{-- <th>Subcategories</th> --}}
                                            <th>Weight <br>(kilogram)</th>
                                            <th>Parcel <br>Charges</th>
                                            <th>Required<br>Service</th>
                                            <th>Parcel<br>Status</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @if ($processed_parcels->count() > 0)
                                        @foreach ($processed_parcels as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>
                                                <a href="{{ url('fetch-region/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                    <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                </a>
                                            </td>
                                            <td>{{ $item->consignee_parcel }}</td>
                                            <td>
                                                @php
                                                $month = date('d/m/Y', strtotime($item->created_at));
                                                // dd($month);
                                                echo $month;
                                                @endphp
                                            </td>
                                            <td> {{ $item->pl_weight }} </td>
                                            <td> {{ $item->pl_final }} </td>
                                            <td> {{ $item->parcel_service->service_name }} </td>
                                            <td>
                                                <a id="todolink" class="btn btn-outline-info btn-sm parcel_allocate" title="add" data-bs-toggle="modal" data-bs-target="#allocatemodal" href="#allocatemodal" data-id="{{ $item->pl_id }}" data-prod-id="{{ $item->service_id }}">
                                                    Allocate
                                                </a>
                                            </td>
                                            {{-- <td style="">
                                                            <a href="{{ url('edit-parcel/' . $item->id) }}"
                                            class="btn btn-outline-warning btn-sm delete"
                                            title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            |
                                            <a href="{{ url('delete-parcel/' . $item->id) }}" class="btn btn-outline-danger btn-sm delete" title="Delete" onclick="return confirm('Are you sure to delete Record?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            </td> --}}
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
    <div class="container">
        <div class="collapse" id="allocatetable">
            <div class="card card-body mb-0">
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body bg-light border rounded">
                                <div class="modal-header mb-2" style="background-color: #d6dbf8">
                                    <h5 class="modal-title">Allocated Parcells</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                @if (isset($allocated_parcels))
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 table-sm text-center">
                                    <thead>
                                        <tr class="text-center">
                                            <th>S.No</th>
                                            <th>Parcel ID</th>
                                            <th>Parcel<br>Destination</th>
                                            <th>Despatch<br>Date</th>
                                            {{-- <th>Subcategories</th> --}}
                                            <th>Weight<br>(kilogram)</th>
                                            <th>Parcel<br>Cost</th>
                                            <th>Vendor<br>Name</th>
                                            <th>Tracking<br>ID</th>
                                            <th>Vendor<br>Charges</th>
                                            <th>Parcel<br>Status</th>
                                            {{-- <th>Action</th>  --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @if ($allocated_parcels->count() > 0)
                                        @foreach ($allocated_parcels as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>

                                                <a href="{{ url('fetch-region/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                    <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                </a>
                                            </td>
                                            <td>{{ $item->consignee_country }}</td>
                                            <td>
                                                @php
                                                $month = date('d/m/Y', strtotime($item->created_at));
                                                // dd($month);
                                                echo $month;
                                                @endphp
                                            </td>
                                            <td> {{ $item->pl_weight }} </td>
                                            <td> {{ $item->pl_final }} </td>
                                            <td> {{ $item->vendor_id }} </td>
                                            <td>
                                                <a class="btn btn-outline-success btn-sm tracking_btn" title="add" data-bs-toggle="modal" data-bs-target="#trackingmodal" id="{{ $item->pl_id }}">
                                                    update
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-primary btn-sm charges_btn" title="add" data-bs-toggle="modal" data-bs-target="#vendorcharges" id="{{ $item->pl_id }}">
                                                    update
                                                </a>
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-info btn-sm delivered_status" title="add" id="{{ $item->pl_id }}">
                                                    Delivered
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




    <!-- Setting container -->
    <div class="page-content" style="padding:0;  padding-top:2%;">
        <div class=" border bg-light">
            <div class="modal modal-alert position-static d-block  " tabindex="-1" role="dialog" id="modalChoice">
                <div class="modal-body  text-center">
                    <a href="#" class="nav-link text-dark">
                        <img src="{{ asset('assets/images/setting.png') }}" alt="">

                        <h3 class="">Settings</h3>
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
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#usermodal">Add
                                    User </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-user') }}">Users
                                    List
                                </a>

                            </div>
                        </div>
                    </div>


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
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#servicemodal">Add
                                    Service </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-service') }}">Services
                                    List
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Services closed -->

                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/vendor.png') }}" alt="">

                                    <h3 class="mb-0 mt-2">Vendors</h3>
                                </a>

                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#logisticmodal">Add
                                    Vendor </a>
                                <a href="{{ route('add-logistic') }}" class="btn btn-success btn-md text-white ">Vendors List
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
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#regionmodal">Add
                                    Region </a>
                                <a class="btn btn-success btn-md text-white" href="{{ route('add-region') }}">Regions
                                    List
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Regions closed -->

                    <div class="col ">
                        <div class="modal-content rounded-3 shadow">
                            <div class="modal-body  text-center">
                                <a href="#" class="nav-link text-dark">
                                    <img src="{{ asset('assets/images/payments.png') }}" alt="">

                                    <h4 class="mb-0 mt-2">Payment Methods</h4>
                                </a>
                            </div>
                            <div class="modal-footer flex-nowrap p-0 justify-content-center">
                                <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal" data-bs-target="#paymentmodal">Add
                                    Method </a>
                                <a class="btn btn-success btn-md text-white " href="{{ route('add-payment-method') }}">Payment List
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Row2 closed -->

</div>


<!------------------Vendor Charges Update ---------------------->
<div class="modal fade" id="vendorcharges" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Update Vendor Charges Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('vendor-tracking-charges') }}" method="POST" id="vendor-tracking-charges">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Charges</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcell_iddd" value="" id="parcell_iddd" class="form-control" readonly>
                            </td>
                            <td>
                                <input type="text" name="vendor_charges" id="vendor_charges" class="form-control">
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-charges" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!------------------TracKing Modal---------------------->
<div class="modal fade" id="trackingmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Update Tracking ID Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Parcel ID</th>
                            <th>Enter Vendor Tracking ID</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="parcell_idd" value="" id="parcell_idd" class="form-control" readonly>
                            </td>
                            <td>
                                <input type="text" name="tracking_idd" value="" id="tracking_idd" class="form-control">
                            </td>
                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

<!------------------Allocate Modal---------------------->
<div class="modal fade" id="allocatemodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Allocate Your Parcel to a Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-allocate') }}" method="POST" id="allocateform" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="">Parcel ID</label>
                            <input type="text" name="parcell_id" value="" id="parcell_id" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="course" class="form-label">Select Vendor for Service </label>
                            <select class="form-control" name="vendor_id" id="vendor_id"></select>
                            @error('vendor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <label for="">Service Used</label> --}}
                            <input type="hidden" name="service_used_id" value="" id="service_used_id" class="form-control">
                        </div>

                    </div>
                    {{-- <div id='order-id'></div>
                    <div id='prod-id'></div> --}}


                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="allocateform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!------------------Allocate Modal---------------------->
{{-- <div class="modal fade" id="allocatedmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Allocate Your Parcel to a Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-allocate') }}" method="POST" id="allocateform" novalidate >
@csrf
<div class="row mb-3">
    <div class="col-md-6">
        <label for="">Parcel ID</label>
        <input type="text" name="parcell_id" value="" id="parcell_id" class="form-control" readonly>
    </div>
    <div class="col-md-6">
        <label for="">Service Used</label>
        <input type="text" name="service_used_id" value="" id="service_used_id" class="form-control" readonly>
    </div>
    <div class="col">
        <label for="">Select Vendor</label>
        <select name="vendor_id" required class="form-select table-responsive @error('vendor_id') is-invalid @enderror">
            @foreach ($logistics as $logistic)
            <option value="{{ $logistic->id }}">
                {{ $logistic->vendor_name }}
            </option>
            @endforeach
        </select>
        @error('vendor_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="modal-footer">
    <!-- Toogle to second dialog -->
    <button type="submit" form="allocateform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
    <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
</div>
</div>
</form>

</div>
</div>
</div> --}}

<!------------------User Modal---------------------->
<div class="modal fade" id="paymentmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Payments Methods</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paymentform" class="needs-validation" novalidate method="POST" action="{{ route('store-payment-method') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username4" class="form-label">Add Payment method</label>
                        <input type="text" placeholder="Enter username" required class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" value="{{ old('payment_method') }}" required autocomplete="payment_method" autofocus>

                        @error('payment_method')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="paymentform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
<!------------------User Modal---------------------->
<div class="modal fade" id="usermodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">User Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userform" class="needs-validation" novalidate method="POST" action="{{ route('store-user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username4" class="form-label">Username</label>
                        <input type="text" placeholder="Enter username" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="useremail1" class="form-label">Email</label>
                        <input type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="userpassword" class="form-label">{{ __('Password') }}</label>
                        <div class="input-group auth-pass-inputgroup">
                            <input type="password" id="userpassword" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Enter password" value="{{ old('password') }}" required>
                            {{-- <button class="btn btn-light " type="button" id="password-addon"><i
                                    class="mdi mdi-eye-outline" onclick="togglePassword"></i></button> --}}



                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="userpassword" for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control @error('company_phone') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input type="checkbox" class="btn btn-light " onclick="togglePassword()">Show Password

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="userform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
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
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Region Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="regionform" action="{{ route('store-region') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username5" class="form-label">Enter Region Name</label>
                            <input type="text" placeholder="Enter customer name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <!-- Toogle to second dialog -->
                            <button type="submit" form="regionform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                            <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
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
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Logistics Vendor Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form2" novalidate method="POST" action="{{ route('store-logistic') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label for="username6" class="form-label">Logistics Name</label>
                                    <input type="text" placeholder="Enter logistic name" class="form-control @error('logistics_name') is-invalid @enderror" name="logistic_name" value="{{ old('logistic_name') }}" required autocomplete="logistic_name" autofocus>

                                    @error('logistic_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="useremail2" class="form-label">Vendor Email</label>
                                    <input type="email" placeholder="Enter Email address" class="form-control @error('vendor_email') is-invalid @enderror" name="vendor_email" value="{{ old('vendor_email') }}" autocomplete="email" required>

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
                                    <input type="text" data-inputmask="'mask': '0399-99999999'" type="number" maxlength="12" class="form-control @error('vendor_phone') is-invalid @enderror" name="vendor_phone" value="{{ old('vendor_phone') }}" required autocomplete="vendor_phone" autofocus>

                                    @error('vendor_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="select2Multiple">Tag Services</label>
                                    <select class="select2-multiple form-control " name="service_id[]" multiple="multiple" style="width: 100%" id="select2Multiple">
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
                                    <textarea name="vendor_address" id="vendor_address" class="form-control @error('company_phone') is-invalid @enderror" cols="1" rows="1">

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
                <button type="submit" form="form2" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </form>

    </div>
</div>

<!------------------Service Modal---------------------->
<div class="modal fade" id="servicemodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Services Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="serviceform" action="{{ route('store-service') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username8" class="form-label">Enter Service Name</label>
                            <input type="text" placeholder="Enter service name" class="form-control @error('service_name') is-invalid @enderror" name="service_name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('service_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <!-- Toogle to second dialog -->
                            <button type="submit" form="serviceform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                            <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!------------------Parcel Modal---------------------->
<div class="modal fade " id="parcelmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Parcel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- This script got from frontendfreecode.com -->
                <form method="POST" action="{{ route('store-parcel') }}" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="container">
                        <div id="app">
                            <step-navigation :steps="steps" :currentstep="currentstep">
                            </step-navigation>

                            <div v-show="currentstep == 1">

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">No of Boxes</label>
                                            <input type="number" class="form-control @error('pl_boxes') is-invalid @enderror" id="pl_boxes" name="pl_boxes" min="0" value="{{ old('pl_boxes') }}" required autofocus>

                                            @error('pl_boxes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Weight in <span class="text-danger text-ecnter">KG</span></label>
                                            <input type="number" class="form-control @error('pl_weight') is-invalid @enderror" id="pl_weight" name="pl_weight" min="0" value="{{ old('pl_weight') }}" required autofocus>

                                            @error('pl_weight')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Select Shipping Service</label>
                                            <select name="service_id" id="service_id" class="form-control @error('serrvice_id') is-invalid @enderror">
                                                <option value=""> ----Choose one Service---- </option>
                                                @foreach ($services as $row)
                                                <option value="{{ $row->id }}"> {{ $row->service_name }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('service_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Charges</label>
                                            <input type="number" class="form-control @error('pl_charges') is-invalid @enderror" id="pl_charges" name="pl_charges" min="0" value="{{ old('pl_charges') }}" required autofocus>

                                            @error('pl_charges')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Extras</label>
                                            <input type="number" class="form-control @error('pl_extras') is-invalid @enderror" id="pl_extras" name="pl_extras" min="0" value="{{ old('pl_extras') }}" required autofocus>

                                            @error('pl_extras')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Discount</label>
                                            <input type="number" class="form-control @error('pl_discount') is-invalid @enderror" id="pl_discount" name="pl_discount" min="0" value="{{ old('pl_discount') }}" required autofocus>

                                            @error('pl_discount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Final Charges</label>
                                            <input type="number" class="form-control @error('pl_final') is-invalid @enderror" id="pl_final" name="pl_final" min="0" value="{{ old('pl_final') }}" required autofocus readonly>

                                            @error('pl_final')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Select Payment Method</label>
                                            <select name="payment_method_id" id="payment_method_id" class="form-control @error('payment_method_id') is-invalid @enderror">
                                                <option value="">-- Select Payment Method --</option>
                                                @foreach ($payment_methods as $row)
                                                <option value="{{ $row->id }}"> {{ $row->payment_method }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('payment_method_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Parcel Description</label>
                                            <textarea name="pl_description" id="pl_description" cols="1" rows="1" class="form-control @error('pl_description') is-invalid @enderror">
                                       </textarea>
                                            @error('pl_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div v-show="currentstep == 2">

                                <div class="repeater">
                                    <div data-repeater-list="userData">
                                        <div data-repeater-item="">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label for="name">Contents</label>
                                                    <input type="text" id="disp_content" name="disp_content[]" class="form-control @error('disp_content') is-invalid @enderror">
                                                    @error('disp_content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label for="message">Condition</label>
                                                    <select name="disp_condition[]" id="disp_condition" class="form-control @error('disp_condition') is-invalid @enderror">

                                                        <option value="new">New</option>
                                                        <option value="used">Used</option>

                                                    </select>
                                                    @error('disp_condition')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label for="message">Currency</label>
                                                    <select name="disp_currency[]" id="disp_currency[]" class="form-control @error('company_currency') is-invalid @enderror">

                                                        <option value="0">PKR</option>
                                                        <option value="1">USD</option>
                                                        <option value="2">Euro</option>
                                                    </select>
                                                    @error('disp_currency')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label for="resume">Price</label>
                                                    <input type="number" id="disp_price" name="disp_price[]" min="0" class="form-control @error('disp_price') is-invalid @enderror" />
                                                    @error('disp_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label for="subject">QTY</label>
                                                    <input type="number" id="disp_quantity" name="disp_quantity[]" min="0" class="form-control @error('disp_quantity') is-invalid @enderror" />
                                                    @error('disp_quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col">
                                                    <label for="resume">Total</label>
                                                    <input type="number" id="disp_total" name="disp_total[]" min="0" class="form-control @error('disp_total') is-invalid @enderror" />
                                                    @error('disp_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col mt-4">
                                                    <button type="button" class="btn btn-danger btn-md" data-repeater-delete="">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button" class="btn btn-success btn-sm" value="Add Notes"><br><br>
                                    {{-- <input type="submit" form="notform" name="submit" class="btn btn-primary" value="Submit">  --}}
                                </div>

                            </div>

                            <div v-show="currentstep == 3">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Tracking" class="form-label">Tracking ID</label>
                                        <input type="text" id="username9" required class="form-control @error('pl_id') is-invalid @enderror" name="pl_id" value="{{ $abc }}" autofocus readonly>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Parcel1" class="form-label">Parcel Date</label>
                                        <input type="date" required id="pl_date" class="form-control @error('pl_date') is-invalid @enderror" name="pl_date" value="{{ old('pl_date') }}" required autofocus>

                                        @error('pl_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Search" class="form-label">Search Phone Number</label>
                                        <input class="form-control @error('pl_phone_id') is-invalid @enderror" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." name="pl_phone_id">
                                        <datalist id="datalistOptions">
                                            @foreach ($services as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->service_name }}
                                            </option>
                                            @endforeach
                                        </datalist>
                                        @error('pl_phone_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <label for="service" class="form-label">Services Type</label>
                                        <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                            maxlength="12" class="form-control @error('company_phone') is-invalid @enderror"
                                            name="company_phone" value="{{ old('company_phone') }}" required autocomplete="phone"
                                    autofocus>

                                    @error('company_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div> --}}
                                <div class="col-md-6 mt-4">
                                    <label for="chkPassport ">
                                        <input type="checkbox" id="chkPassport" />
                                        Add New Shipper
                                    </label>

                                </div>
                                <div id="dvAddShipper" style="display: none">
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <label for="username2" class="form-label">Company
                                                Name</label>
                                            <input type="text" placeholder="Company Name" required class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                            @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="username3" class="form-label">Contact
                                                Person</label>
                                            <input type="text" data-inputmask="'mask': '0399-99999999'" required="" type="number" maxlength="12" name="shipper_phone" class="form-control @error('shipper_phone') is-invalid @enderror" @error('shipper_phone') <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="basicpill-phoneno-input">Select Country:</label>
                                            <select class="form-control @error('shipper_country_id') is-invalid @enderror" name="shipper_country_id" id="shipper_country_id">
                                                <option value=""> ------------- Select One Country
                                                    -------------
                                                </option>
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">
                                                    {{ $country->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('shipper_country_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">State/
                                                Province /Region:</label>
                                            <input type="text" class="form-control @error('shipper_state') is-invalid @enderror" name="shipper_state" id="shipper_state">
                                            @error('shipper_state')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">City:</label>
                                            <input type="text" class="form-control @error('shipper_city') is-invalid @enderror" name="shipper_city" id="shipper_city">
                                            @error('shipper_city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">ZIP:</label>
                                            <input type="text" class="form-control @error('shipper_zip') is-invalid @enderror" name="shipper_zip" id="shipper_zip">
                                            @error('shipper_zip')
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
                                            <input type="text" class="form-control @error('shipper_add1') is-invalid @enderror" name="shipper_add1" id="shipper_add1">
                                            @error('shipper_add1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basicpill-phoneno-input">Address
                                                Line2:</label>
                                            <input type="text" class="form-control @error('shipper_add2') is-invalid @enderror" name="shipper_add2" id="shipper_add2">
                                            @error('shipper_add2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-show="currentstep == 4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username0" class="form-label">Consignee
                                    Name</label>
                                <input type="text" placeholder="Receiver Name" required class="form-control @error('consignee_name') is-invalid @enderror" name="consignee_name" value="{{ old('consignee_name') }}" required autocomplete="name" autofocus>

                                @error('consignee_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="username13" class="form-label">Receiver Phone
                                    Number</label>
                                <input type="text" data-inputmask="'mask': '0399-99999999'" type="number" maxlength="12" class="form-control @error('consignee_phone') is-invalid @enderror" name="consignee_phone" value="{{ old('consignee_phone') }}" required autocomplete="consignee_phone" autofocus>

                                @error('consignee_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3 mb-2">
                            <div class="col-md-6">
                                <label for="chkCompany">
                                    <input type="checkbox" id="chkCompany" />
                                    Is it Business?
                                </label>
                            </div>
                            <div class="col-md-6">
                                <div id="dvCompany" style="display: none">
                                    <input type="text" class="form-control @error('consignee_business') is-invalid @enderror" id="consignee_business" name="consignee_business" placeholder="Business Title" />
                                    @error('consignee_business')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="basicpill-phoneno-input">Select Country:</label>
                                <select class="form-control @error('consignee_country_id') is-invalid @enderror" name="consignee_country_id" id="consignee_country_id">
                                    <option value=""> ------------- Select One Country -------------
                                    </option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @error('consignee_country_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="basicpill-phoneno-input">State/
                                    Province /Region:</label>
                                <input type="text" class="form-control @error('consignee_state') is-invalid @enderror" name="consignee_state" id="consignee_region">
                                @error('consignee_state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="basicpill-phoneno-input">City:</label>
                                <input type="text" class="form-control @error('consignee_city') is-invalid @enderror" name="consignee_city" id="consignee_city">
                                @error('consignee_city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="basicpill-phoneno-input">ZIP:</label>
                                <input type="text" class="form-control @error('consignee_zip') is-invalid @enderror" name="consignee_zip" id="consignee_zip">
                                @error('consignee_zip')
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
                                <input type="text" class="form-control @error('consignee_add1') is-invalid @enderror" name="consignee_add1" id="consignee_add1">
                                @error('consignee_add1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="basicpill-phoneno-input">Address
                                    Line2:</label>
                                <input type="text" class="form-control @error('consignee_add2') is-invalid @enderror" name="consignee_add2" id="consignee_add2">
                                @error('consignee_add2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3 mb-2">
                            <div class="col-md-6">
                                Dispatch Notes Printout
                                <a href="{{ url('/dispatch-notes-print-view') }}" class="btn btn-info waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                            </div>
                            <div class="col-md-6">
                                Customer Receipt Printout
                                <a href="{{ url('/customer-receipt-print-view') }}" class="btn btn-info waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>

                    <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
                    </step>

                    <script type="x-template" id="step-navigation-template">
                        <ol class="step-indicator">
                                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                                </li>
                            </ol>
                        </script>

                    <script type="x-template" id="step-navigation-step-template">
                        <li :class="indicatorclass">
                                <div class="step"><i :class="step.icon_class"></i></div>
                                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
                            </li>
                        </script>

                    <script type="x-template" id="step-template">
                        <div class="step-wrapper float-end" :class="stepWrapperClass">
                                <button type="button" class="btn btn-primary mx-1" @click="lastStep" :disabled="firststep">
                                    &#60; Back
                                </button>
                                <button type="button" class="btn btn-primary mx-1" @click="nextStep" :disabled="laststep">
                                    Next &#62;
                                </button>
                                <button type="submit" class="btn btn-primary mx-1" v-if="laststep">
                                    Submit
                                </button>
                            </div>
                        </script>
            </div>
        </div>
        </form>

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

                    $("#exampleDataList").val('');
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

        $(function() {
            $("#pl_discount").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed
            $("#pl_charges").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed
            $("#pl_extras").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed

            $('.parcel_allocate').on('click', function(e) {
                e.preventDefault();

                $('#parcell_id').val($(this).data('id'));
                $('#service_used_id').val($(this).data('prod-id'));

                var pl_id = ($(this).data('id'));
                var service_id = ($(this).data('prod-id'));
                // alert(pl_id);
                // alert(service_id);
                if (service_id) {

                    $.ajax({
                        url: "{{ url('/getSelected') }}/" + service_id,
                        type: "GET",
                        //    data : {"_token":"{{ csrf_token() }}"},
                        //    dataType: "json",
                        success: function(data) {
                            console.log(data);
                            if (data) {
                                $('#vendor_id').empty();
                                $('#vendor_id').append(
                                    '<option hidden>Choose Vendor</option>');
                                $.each(data, function(key, course) {
                                    $('select[name="vendor_id"]').append(
                                        '<option value="' + course.id +
                                        '">' + course.logistic_name +
                                        '</option>');
                                });
                            } else {
                                $('#vendor_id').empty();
                            }
                        }
                    });
                } else {
                    $('#vendor_id').empty();
                }

            });

            $('.tracking_btn').on('click', function(e) {
                e.preventDefault();
                // alert(1);
                $('#parcell_idd').val(this.id);
            });

            $('.charges_btn').on('click', function(e) {
                e.preventDefault();
                // alert(2);
                $('#parcell_iddd').val(this.id);
            });

            $('.delivered_status').on('click', function(e) {
                e.preventDefault();
                var pl_id = (this.id);
                // alert(pl_id)
                if (pl_id) {

                    $.ajax({
                        url: "{{ url('/getDeliveredStatus') }}/" + pl_id,
                        type: "GET",
                        //    data : {"_token":"{{ csrf_token() }}"},
                        //    dataType: "json",
                        success: function(data) {
                            console.log(data);
                            if (data) {
                                $('.delivered_status').empty();
                                $('.delivered_status').append();
                               
                            } else {
                                $('.delivered_status').empty();
                            }
                        }
                    });
                } else {
                    $('.delivered_status').empty();
                }
            });
        });


    }); //ready function closed
</script>
<script data-rishi-type="text/javascript" data-cfasync="false" data-no-optimize="1" data-no-defer="1" data-no-minify="1">
    $(document).ready(function() {


        $('.repeater').repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
        });
    });
</script>
{{-- <script>
    $(":input").inputmask();
</script>  --}}
<script>
    Vue.component("step-navigation-step", {
        template: "#step-navigation-step-template",

        props: ["step", "currentstep"],

        computed: {
            indicatorclass() {
                return {
                    active: this.step.id == this.currentstep,
                    complete: this.currentstep > this.step.id
                };

            }
        }
    });



    Vue.component("step-navigation", {
        template: "#step-navigation-template",

        props: ["steps", "currentstep"]
    });


    Vue.component("step", {
        template: "#step-template",

        props: ["step", "stepcount", "currentstep"],

        computed: {
            active() {
                return this.step.id == this.currentstep;
            },

            firststep() {
                return this.currentstep == 1;
            },

            laststep() {
                return this.currentstep == this.stepcount;
            },

            stepWrapperClass() {
                return {
                    active: this.active
                };

            }
        },


        methods: {
            nextStep() {
                this.$emit("step-change", this.currentstep + 1);
            },

            lastStep() {
                this.$emit("step-change", this.currentstep - 1);
            }
        }
    });



    new Vue({
        el: "#app",

        data: {
            currentstep: 1,

            steps: [{
                    id: 1,
                    title: "Parcel Registration",
                    icon_class: "fa fa-map-marker"
                },

                {
                    id: 2,
                    title: "Dispatch Notes",
                    icon_class: "fa fa-folder-open"
                },

                {
                    id: 3,
                    title: "Shipper Details",
                    icon_class: "fa fa-paper-plane"
                },

                {
                    id: 4,
                    title: "Consignee Details",
                    icon_class: "fa fa-get-pocket"
                }
            ]
        },

        methods: {
            stepChanged(step) {
                this.currentstep = step;
            }
        }
    });



    function togglePassword() {
        var x = document.getElementById("userpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    // function togglePassword () {
    //   var x = document.getElementById("password-confirm");
    //   if (x.type === "password") {
    //     x.type = "text";
    //   } else {
    //     x.type = "password";
    //   }
    // }
</script>