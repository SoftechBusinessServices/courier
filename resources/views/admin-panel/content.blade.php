<div class="page-content px-5" style="padding:0; padding-top:6%;">
    <div class="page-title-box d-sm-flex  justify-content-left  ">
        <h4 class="mb-sm-0 font-size-18"><a href="{{ route('home') }}">Dashboard</a></h4>
    </div>

    <!-- fist container  -->
    <div class="row gx-5  ">
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
                        <a href="add-suppliers.html"> <button type="button" class="btn btn-primary btn-md">Payments</button></a>

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
                                    Product Categories Details
                                </h4>
                                @if (isset($regions))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>No of Countries</th>
                                                {{-- <th>Subcategories</th> --}}
                                                <th>Date</th>
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
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td> 02 | <a href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-secondary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td style="">
                                                            <a href="#"
                                                                class="btn btn-outline-secondary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            |
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
                                    data-bs-target="#regionmodal">Add
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


<!-- ***************Parcel Modal**************** -->
<div class="modal fade " id="parcelmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Parcel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

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
                    <div id="basic-example">
                        <h3>Shipper Details</h3>
                        <section>

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


                <h3>Consignee Details</h3>
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
                                    have a Business?
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
                                    class="form-control @error('pl_address') is-invalid @enderror" name="pl_address"
                                    value="{{ old('pl_address') }}" required autocomplete="name" autofocus>

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
                    <div>
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
                    </div>

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
                                                <input type="checkbox" name="check_print" value="Orange">Do you want to Print?
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- ***************Parcel Modal**************** -->


                    <!-- __________Javascript____________-->
                    <script>
                        $(document).ready(function() {
                            // onchange radio
                            $('#random_customer').hide();
                            $('#company_customer').hide();

                            $('input[type=radio][name=customer_type]').on('change', function() {

                                switch ($(this).val()) {

                                    case 'random':
                                        // alert("1");

                                        $('#random_customer').show();
                                        //$('#company_customer').empty();
                                        $('#company_customer').hide();
                                        break;

                                    case 'registered':
                                        // alert("2");

                                        $('#company_customer').show();
                                        //$('#random_customer').empty();
                                        $('#random_customer').hide();
                                }
                            });

                            //oncheck box
                            $("#company_representative").hide();
                            $('input[type=radio][name=answer]').change(function() {

                                if ($(this).val() == "yes") {
                                    $("#company_representative").show();
                                } else {
                                    $("#company_representative").hide();
                                }
                            });

                            //country_id function closed
                            $('#country_id').on('change', function() {
                                var country_id = $(this).val();

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

                                                $("#pl_cost").blur(function() {

                                                    var pl_weight = parseInt($('#pl_weight').val());
                                                    var pl_cost = parseInt($('#pl_cost').val());
                                                    var pl_extras = parseInt($('#pl_extras').val());
                                                    var pl_discount = parseInt($('#pl_discount').val());
                                                    var pl_total = (pl_cost + pl_extras) - pl_discount;
                                                    $('#pl_final').val(pl_total);


                                                }); // cost blur function closed

                                                $("#pl_discount").blur(function() {

                                                    var pl_cost = parseInt($('#pl_cost').val());
                                                    var pl_extras = parseInt($('#pl_extras').val());
                                                    var pl_discount = parseInt($('#pl_discount').val());
                                                    var pl_total = (pl_cost + pl_extras) - pl_discount;
                                                    $('#pl_final').val(pl_total);

                                                }); // discount blur function closed
                                                $("#pl_extras").blur(function() {

                                                    var pl_cost = parseInt($('#pl_cost').val());
                                                    var pl_extras = parseInt($('#pl_extras').val());
                                                    var pl_discount = parseInt($('#pl_discount').val());
                                                    var pl_total = (pl_cost + pl_extras) - pl_discount;
                                                    $('#pl_final').val(pl_total);

                                                }); // discount blur function closed
                                                $("#pl_weight").blur(function() {

                                                    var pl_cost = parseInt($('#pl_cost').val());
                                                    var pl_extras = parseInt($('#pl_extras').val());
                                                    var pl_discount = parseInt($('#pl_discount').val());
                                                    var pl_total = (pl_cost + pl_extras) - pl_discount;
                                                    $(
                                                        '#pl_final').val(pl_total);

                                                }); // discount blur function closed

                                            } else {
                                                alert('data not found');

                                            }
                                        }
                                    });
                                }
                            });

                            // rate controls ajax
                            $('#country_idd').on('change', function() {
                                var country_id = $(this).val();
                                // alert(country_id)
                                if (region_idd) {
                                    $.ajax({
                                        url: "{{ url('/getSelected') }}/" + country_id,
                                        type: "GET",
                                        success: function(data) {
                                            if (data) {
                                                console.log(data);
                                                $("#region_idd").html(data);
                                            } else {
                                                $('#region_idd').empty();
                                            }
                                        }
                                    });
                                } else {
                                    $('#region_idd').empty();
                                }
                            });

                            //currency method starts
                            $('#currency_idd').on('click', function() {
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
                                            $('#symbol_idd').val(response['0'][
                                                'symbol'
                                            ]);
                                        }

                                    });
                                } else {

                                }
                            });
                            // company-representative selection
                            $('#company_idd').on('change', function() {

                                var company_idd = $(this).val();
                                alert(company_idd);
                                if (company_idd) {
                                    $.ajax({
                                        url: "{{ url('/getCompany') }}/" + company_idd,
                                        type: "GET",

                                        success: function(data) {
                                            if (data) {
                                                console.log(data);
                                                $('#represent_idd').empty();
                                                $('#represent_idd').append(
                                                    '<option hidden>Choose Representative</option>');
                                                $.each(data, function(key, course) {
                                                    $('select[name="represent_idd"]').append(
                                                        '<option value="' + course.id + '">' +
                                                        course.represent_name + '</option>');
                                                });
                                            } else {

                                                $('#represent_idd').empty();

                                            }
                                        }
                                    });
                                } else {

                                    $('#represent_idd').empty();

                                }
                            });



                        }); //ready function closed
                    </script>
                    <script type="text/javascript">
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
                    </script>
