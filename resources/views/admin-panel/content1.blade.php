{{-- <div class="main-content"> --}}
<div class="">





    <div class="page-content">
        <div class="container-fluid " style="border: none">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <!--write your code here  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex  justify-content-left  ">
                                <h4 class="mb-sm-0 font-size-18"><a href="{{ route('home') }}">Dashboard</a></h4>

                            </div>
                        </div>
                    </div>
                    <!--dashboard row closed -->

                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-6 ">

                                    <div class="row border rounded  mx-0 mb-3">
                                        <div class="card-title  ">
                                            <h6 class="my-2">Orders</h6>
                                            <hr>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-secondary">
                                                <div class="card-header bg-transparent border-secondary text-center">
                                                    <h6 class="my-0 text-secondary text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">New
                                                        Parcel</a>
                                                    {{-- <a class="text-dark btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#parcelmodal">New
                                                        Parcel</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-success">
                                                <div class="card-header bg-transparent border-success text-center">
                                                    <h6 class="my-0 text-success text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Processed</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-primary">
                                                <div class="card-header bg-transparent border-primary text-center">
                                                    <h6 class="my-0 text-primary text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Allocated</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-danger">
                                                <div class="card-header bg-transparent border-danger text-center">
                                                    <h6 class="my-0 text-danger text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Cancelled</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-warning">
                                                <div class="card-header bg-transparent border-warning text-center">
                                                    <h6 class="my-0 text-warning text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Pending</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-info">
                                                <div class="card-header bg-transparent border-info text-center">
                                                    <h6 class="my-0 text-info text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Dispatched</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="card border border-secondary">
                                                <div class="card-header bg-transparent border-secondary text-center">
                                                    <h6 class="my-0 text-secondary text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <span class="">Assigned</span>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-success">
                                                <div class="card-header bg-transparent border-success text-center">
                                                    <h6 class="my-0 text-success text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Delivered</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card border border-danger">
                                                <div class="card-header bg-transparent border-danger text-center">
                                                    <h6 class="my-0 text-danger text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <a href="{{ route('add-parcel') }}" class="text-dark btn-sm">
                                                        Returned</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                                            <div class="card border border-primary">
                                                <div class="card-header bg-transparent border-primary text-center">
                                                    <h6 class="my-0 text-primary text-center text-bold"><i
                                                            class="mdi mdi-bullseye-arrow "></i>{{ $data->count() }}
                                                    </h6>
                                                    <span class="">Outstation</span>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                    <!-- buttons section row  end -->

                                    <div class="row mb-0">
                                        <div class="col-md-12">
                                            <div class="card mb-0">
                                                <div class="card-body">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs nav-tabs-custom nav-justified"
                                                        role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#home1" role="tab">
                                                                <span class="d-block d-sm-none"><i
                                                                        class="fas fa-home"></i></span>
                                                                <span class="d-none d-sm-block">Settings</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#profile1"
                                                                role="tab">
                                                                <span class="d-block d-sm-none"><i
                                                                        class="far fa-user"></i></span>
                                                                <span class="d-none d-sm-block">Reports</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#messages1"
                                                                role="tab">
                                                                <span class="d-block d-sm-none"><i
                                                                        class="far fa-envelope"></i></span>
                                                                <span class="d-none d-sm-block">Vouchers</span>
                                                            </a>
                                                        </li>

                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content pt-3  text-muted">
                                                        <div class="tab-pane active" id="home1" role="tabpanel"
                                                            style=" ">
                                                            <p class="mb-0">
                                                            <div class="row">
                                                                <div class="col-xl-12 ">
                                                                    <h4
                                                                        class="card-title font-weight-bolde font-size-20">
                                                                        Settings</h4>
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-2">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Regions</h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add
                                                                                        region</a>
                                                                                    {{-- <a href="{{ route('add-region') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-2">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Countries
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#countrymodal">Add
                                                                                        Country </a>
                                                                                    {{-- <a href="{{ route('add-country') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-2">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Currencies
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#paisamodal">Add
                                                                                        Currency</a>
                                                                                    {{-- <a href="{{ route('add-currency') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-2">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Rate Charges
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#ratemodal">Add
                                                                                        Charges</a>
                                                                                    {{-- <a href="{{ route('add-currency') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-4 ">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Companies</h5>
                                                                                </div>
                                                                                <div class=" text-center ">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#companymodal">Add
                                                                                        Company </a>
                                                                                    {{-- <a href="{{ route('add-representator') }}"
                                                                                    class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-4 ">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Representatives</h5>
                                                                                </div>
                                                                                <div class="text-center ">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#representmodal">Representative</a>
                                                                                    {{-- <a href="{{ route('add-representator') }}"
                                                                                class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                        {{-- <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border p-3 rounded mt-4">
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">Representator
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="float-end mt-3">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#representmodal">Add</a>
                                                                                    <a href="{{ route('add-representator') }}"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div> --}}

                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-4 ">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Vendors</h5>
                                                                                </div>
                                                                                <div class=" text-center ">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#vendormodal">Add
                                                                                        Vendor</a>
                                                                                    {{-- <a href="{{ route('add-logistic') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-2 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">New
                                                                                        Parcel</h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#parcelmodal">Add
                                                                                        Parcel</a>
                                                                                    {{-- <a href="{{ route('add-parcel') }}"
                                                                                        class="btn btn-sm btn-primary">View</a> --}}
                                                                                </div>

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                        <!--- tabpane closed -->

                                                        <div class="tab-pane" id="profile1" role="tabpanel"
                                                            style=" ">
                                                            <p class="mb-0">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <h4
                                                                        class="card-title font-size-20 font-weight-bolder mb-0">
                                                                        Reports Section</h4>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center  p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-update"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        Daily Transactions <br>Report
                                                                                        Section
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-calendar-cursor"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        Date Range<br>Ledger Report
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-account-cash"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        Ledger report <br> by customer
                                                                                        name
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-currency-usd-off"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        List of customers<br> with
                                                                                        closing
                                                                                        balance

                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-update"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        Dummy report
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-update"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h6 class="font-size-14 mb-0">
                                                                                        Dummy report
                                                                                    </h6>
                                                                                </div>
                                                                                <div class="text-center">
                                                                                    {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                                data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View
                                                                                        Report</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--- tabpane closed -->

                                                        <div class="tab-pane" id="messages1" role="tabpanel"
                                                            style=" ">
                                                            <p class="mb-0">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <h4
                                                                        class="card-title font-size-20 font-weight-bolder mb-0 ">
                                                                        Vouchers Section</h4>
                                                                    <div class="row">

                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border  rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center  p-3 border-bottom">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">Cash
                                                                                        Payment
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">Cash
                                                                                        Receipt
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Cheque
                                                                                        Payment</h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Cheque
                                                                                        Receipt</h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">
                                                                                        Journal
                                                                                        Voucher</h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                            <div class="border rounded mt-4">
                                                                                <div
                                                                                    class="d-flex align-items-center p-3 border-bottom ">
                                                                                    <div class="avatar-xs me-3">
                                                                                        <span
                                                                                            class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                            <i
                                                                                                class="mdi mdi-bitcoin"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <h5 class="font-size-14 mb-0">Sales
                                                                                        Voucher
                                                                                    </h5>
                                                                                </div>

                                                                                <div class="text-center">
                                                                                    <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#regionmodal">Add</a>
                                                                                    <a href="#"
                                                                                        class="btn btn-sm btn-primary">View</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </p>
                                                        </div>
                                                        <!--- tabpane closed -->
                                                    </div>
                                                </div>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h6 class="m-2">Parcels</h6>
                                            <hr>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="pie_chart" class="apex-charts" dir="ltr">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">

                                                    <div class="card-title">
                                                        {{-- <h6 class="m-2">Parcels</h6> --}}
                                                        <div class="row m-4">

                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-dark">
                                                                    <div
                                                                        class="card-header bg-transparent border-dark text-center">
                                                                        <p
                                                                            class="my-0 text-dark text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $regions->count() }}
                                                                        </p>
                                                                        <a class="text-dark hover"
                                                                            href="{{ route('add-region') }}">Regions</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-primary">
                                                                    <div
                                                                        class="card-header bg-transparent border-primary text-center">
                                                                        <h6
                                                                            class="my-0 text-primary text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $countries->count() }}
                                                                        </h6>
                                                                        <a class="text-dark hover"
                                                                            href="{{ route('add-country') }}">Countries</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-warning">
                                                                    <div
                                                                        class="card-header bg-transparent border-warning text-center">
                                                                        <h6
                                                                            class="my-0 text-warning text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $currencies->count() }}
                                                                        </h6>
                                                                        <a class="text-dark hover"
                                                                            href="{{ route('add-currency') }}">Currencies</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-info">
                                                                    <div
                                                                        class="card-header bg-transparent border-info text-center">
                                                                        <h6
                                                                            class="my-0 text-info text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $companies->count() }}
                                                                        </h6>
                                                                        <a class="text-dark hover"
                                                                            href="{{ route('add-company') }}">Companies</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-success">
                                                                    <div
                                                                        class="card-header bg-transparent border-success text-center">
                                                                        <h6
                                                                            class="my-0 text-success text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $customers->count() }}
                                                                        </h6>
                                                                        <a class="text-dark hover"
                                                                            href="{{ route('add-logistic') }}">Vendors</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                                <div class="card border border-warning">
                                                                    <div
                                                                        class="card-header bg-transparent border-warning text-center">
                                                                        <h6
                                                                            class="my-0 text-warning text-center text-bold">
                                                                            <i
                                                                                class="mdi mdi-bullseye-arrow "></i>{{ $currencies->count() }}
                                                                        </h6>
                                                                        <a class="text-dark font-size-10 font-weight-bold p-0"
                                                                            href="{{ route('add-representator') }}">Representatives</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- first row closed-->

                </div>
            </div>

            <!--latest transaction -->
            <!-- end row -->

        </div>
    </div>
</div>
<!-- start page title -->

</div>
<!-- container-fluid -->
</div>
</div>
<!-- main-content -->

{{-- *******************************Parcel Modal************************************************************* --}}
<div class="modal fade" id="parcelmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Parcel Registrations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form1" novalidate method="POST" action="{{ route('store-parcel') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center"></h5>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Tracking ID</label>
                                    <input type="text" id="username" required
                                        class="form-control @error('pl_id') is-invalid @enderror" name="pl_id"
                                        value="{{ old('pl_id') }}" autofocus readonly>
                                </div>
                                <div class="col-md-6 mb-2">
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
                            <div class="row mt-3">
                                <div class="col-md-4 mb-2">
                                     &#45;&#45;&#45;&#45;&#45;&#45;
                                     <label for="useremail" class="form-label">Customer Type </label>
                                </div>
                                <div class="col-md-8 mb-2">
                                    <input type="radio" name="customer_type" id="random" value="random"
                                    class="ml-2">Normal
                                <input type="radio" name="customer_type" id="registered"
                                    value="registered" class="ml-2">Company
                                </div>
                            </div>
                            <div class="row mt-2" id="random_customer">
                                <hr>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Customer Name</label>
                                    <input type="text" id="username" placeholder="Customer Name" required
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Customer Phone Number</label>
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
                                <div class="col-md-12 mb-2 form-control">
                                    <label for="address" class="form-label">Customer Address</label>
                                    <textarea name="address" id="address" class="form-control" cols="2" rows="3">

                                                    </textarea>
                                    @error('customer_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-2" id="company_customer">
                                <hr>
                                <div class="col-md-6 mb-2">
                                    <label for="useremail" class="form-label">Select Company</label>

                                    <select class="form-control" name="company_idd" id="company_idd">
                                        <option hidden>Choose Category</option>
                                        @foreach ($companies as $item)
                                            <option value="{{ $item->id }}">{{ $item->fname }}</option>
                                        @endforeach
                                    </select>
                                    @error('company_idd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="useremail" class="form-label">Select Representator</label>
                                    <select class="form-control" name="represent_idd" id="represent_idd">

                                    </select>
                                    @error('representator_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="useremail" class="form-label">Destination Country</label>
                                    <select class="form-select" name="country_id" required id="country_id"
                                        class="form-control table-responsive @error('country_id') is-invalid @enderror">
                                        <option value="">-----</option>
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                {{-- -{{ $country->charges }} --}}
                                            </option>
                                        @endforeach
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
                            <div class="col-md-6 mb-2">
                                <label for="username" class="form-label">Parcel Weight
                                    <code>(grams)</code></label>
                                <input type="number" id="pl_weight" placeholder="Enter Parcel Weight" required
                                    class="form-control @error('pl_weight') is-invalid @enderror" name="pl_weight"
                                    value="{{ old('pl_weight') }}" required autocomplete="pl_weight" autofocus>

                                @error('pl_weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="username" class="form-label">Parcel Cost in </label>
                                <div id="symbol_lable" class="d-inline text-danger">
                                </div>
                                <input type="hidden" name="pl_symbol" id="pl_symbol" value="">
                                <div class="d-inline">
                                    <input type="number" id="pl_cost" placeholder="Enter Parcel Cost"
                                        class="form-control @error('pl_cost') is-invalid @enderror" name="pl_cost"
                                        required autocomplete="pl_cost" autofocus>

                                    @error('pl_cost')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Chargeable Weight</label>
                                    <input type="text" id="chargeable_weight"
                                        class="form-control @error('chargeable_weight') is-invalid @enderror"
                                        name="chargeable_weight" required autocomplete="chargeable_weight" autofocus
                                        readonly>

                                    @error('chargeable_weight')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-2">
                                <label for="username" class="form-label">Parcel Extras Cost</label>
                                <input type="number" id="pl_extras" placeholder="Enter Parcel Extra Cost" required
                                    class="form-control @error('pl_extras') is-invalid @enderror" name="pl_extras"
                                    value="{{ old('pl_extras') }}" required autocomplete="pl_extras" autofocus>

                                @error('pl_extras')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="username" class="form-label">Parcel Discount</label>
                                <input type="number" id="pl_discount" placeholder="Enter Parcel Discount" required
                                    class="form-control @error('pl_discount') is-invalid @enderror" name="pl_discount"
                                    value="{{ old('pl_discount') }}" required autocomplete="pl_discount" autofocus>

                                @error('pl_discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="username" class="form-label">Parcel Final Cost</label>
                                <input type="number" id="pl_final" placeholder="Parcel Final Charges" required
                                    class="form-control @error('pl_final') is-invalid @enderror" name="pl_final"
                                    value="{{ old('pl_final') }}" readonly autocomplete="pl_final" autofocus>

                                @error('pl_final')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="address" class="form-label">Parcel Description</label>
                                <textarea name="pl_description" id="pl_description" class="form-control" cols="1" rows="1">
                                </textarea>
                                @error('pl_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row">
                            <input type="hidden" name="region_id" id="region_id" class="form-control"
                                value="" readonly>

                            <input type="hidden" id="currency_id" class="form-control" autofocus name="currency_id"
                                value="" readonly>
                        </div>


                        {{-- first row closed --}}

                    </div>
                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="form1" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
{{-- ***************************Vendor Modal************************************************ --}}
<div class="modal fade" id="vendormodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logistics Registration</h5>
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
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label for="useremail" class="form-label">Vendor Email</label>
                                    <input type="email" id="useremail" placeholder="Enter Email address"
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
                        <div class="col-md-12 mb-2">
                            <label for="username" class="form-label">Vendor Phone Number</label>
                            <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="useremail" class="form-label">Select Country</label>
                            <select class="form-select" name="country_id" required
                                class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                value="{{ old('country_id') }}">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}
                                        {{-- - {{ $country->code }} --}}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="address" class="form-label">Vendor Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">

                                    </textarea>
                            @error('customer_address')
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
{{-- ***************************Vendor Modal************************************************ --}}
<div class="modal fade" id="representmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Company Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="representform" novalidate method="POST" action="{{ route('store-representator') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mb-0">
                                    <label for="useremail" class="form-label">Select Company</label>
                                    <select class="form-select" name="company_id" required
                                        class="form-control table-responsive @error('company_id') is-invalid @enderror"
                                        value="{{ old('company_id') }}">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">
                                                {{ $company->fname . ' ' . $company->lname }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-0">
                                    <label for="username" class="form-label">Representator Name</label>
                                    <input type="text" id="username" placeholder="Enter customer name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-0">
                                    <label for="useremail" class="form-label">Representator Email</label>
                                    <input type="email" id="useremail" placeholder="Enter email"
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
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Representator Phone Number</label>
                            <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-0">
                            <label for="address" class="form-label">Representator Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">

                                    </textarea>
                            @error('customer_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="representform" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- ***************************Company Modal************************************************ --}}
<div class="modal fade" id="companymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Company Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form3" novalidate method="POST" action="{{ route('store-company') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">First Name</label>
                                    <input type="text" id="username" placeholder="First Name" required
                                        class="form-control @error('fname') is-invalid @enderror" name="fname"
                                        value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Last Name</label>
                                    <input type="text" id="username" placeholder="Last Name" required
                                        class="form-control @error('lname') is-invalid @enderror" name="lname"
                                        value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label for="useremail" class="form-label">Company Email</label>
                                    <input type="email" id="useremail" placeholder="Email Address"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Company Website URL</label>
                                    <input type="url" id="web_url" name="web_url" required
                                        placeholder="https://example.com" pattern="https://.*"
                                        class="form-control @error('web_url') is-invalid @enderror"
                                        value="{{ old('web_url') }}" required autocomplete="company_url" autofocus>

                                    @error('web_url')
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
                        <div class="col-md-6 mb-2">
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
                        <div class="col-md-6 mb-2">
                            <label for="username" class="form-label">Company NTN Number</label>
                            <input type="number" id="ntn_no" placeholder="NTN Number" required
                                class="form-control @error('ntn_no') is-invalid @enderror" name="ntn_no"
                                value="{{ old('ntn_no') }}" required autocomplete="ntn_no" autofocus>

                            @error('ntn_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 mb-2">
                            <label for="useremail" class="form-label">Select Country</label>
                            <select class="form-select" name="country_id" required
                                class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                value="{{ old('country_id') }}">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}
                                        {{-- -{{ $country->charges }} --}}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="address" class="form-label">Company Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">
                            </textarea>
                        </div>
                        <div class="col-md-12 mb-2">

                            <label for="address" class="form-label">Company Representative</label>
                            <input type="radio" name="answer" id="no" value="no" class="ml-2">NO
                            <input type="radio" name="answer" id="yes" value="yes" class="ml-2">YES

                            <div class="row mt-1" id="company_representative">
                                <hr>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Representative Name</label>
                                    <input type="text" id="username" placeholder="Representative Name" required
                                        class="form-control @error('represent_name') is-invalid @enderror"
                                        name="represent_name" value="{{ old('represent_name') }}" required
                                        autocomplete="name" autofocus>

                                    @error('represent_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="username" class="form-label">Phone Number</label>
                                    <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                        maxlength="12"
                                        class="form-control @error('represent_phone') is-invalid @enderror"
                                        name="represent_phone" value="{{ old('represent_phone') }}" required
                                        autocomplete="phone" autofocus>

                                    @error('represent_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="useremail" class="form-label">Representative Email</label>
                                    <input type="email" id="useremail" placeholder="Email Address"
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="represent_email" value="{{ old('represent_email') }}"
                                        autocomplete="represent_email" required>

                                    @error('represent_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label for="address" class="form-label">Representative Address</label>
                                    <textarea name="represent_address" id="represent_address" class="form-control" cols="1" rows="1">

                                    </textarea>
                                    @error('represent_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="form3" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

{{-- ***************************Region Modal************************************************ --}}
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
{{-- ***************************Country Modal************************************************ --}}
<div class="modal fade" id="countrymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Country Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="countryform" novalidate method="POST" action="{{ route('store-country') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 mb-0">
                                    <label for="useremail" class="form-label">Choose Region</label>
                                    <select class="form-select" name="region_id" required id="region_id"
                                        class="form-control table-responsive @error('region_id') is-invalid @enderror">
                                        <option value="">-----</option>
                                        @foreach ($regions as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}
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
                                <div class="col-md-12 mb-0">
                                    <label for="username" class="form-label">Country Name</label>
                                    <input type="text" id="username" placeholder="Enter country name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-0">
                                    <label for="username" class="form-label">Country Code</label>
                                    <input type="text" id="username" placeholder="Enter country code"
                                        class="form-control @error('code') is-invalid @enderror" name="code"
                                        value="{{ old('code') }}" required autocomplete="code" autofocus>

                                    @error('code')
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
                <button type="submit" form="countryform" class="btn btn-primary " id="modal_submit"
                    value="Submit">Submit</button>
                <button type="button" class="btn btn-secondary" id="modal_close1"
                    data-bs-dismiss="modal">Close</button>
            </div>
            </form>

        </div>
    </div>
</div>
{{-- ***************************Currency Modal************************************************ --}}
<div class="modal fade" id="paisamodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Currency Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paisaform" novalidate method="POST" action="{{ route('store-currency') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Currency Name</label>
                            <input type="text" id="username" placeholder="Enter currency name"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Currency Symbol</label>
                            <input type="text" id="username" placeholder="Enter currency symbol"
                                class="form-control @error('symbol') is-invalid @enderror" name="symbol"
                                value="{{ old('symbol') }}" required autocomplete="symbol" autofocus>

                            @error('symbol')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="paisaform" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- ***************************Charges Modal************************************************ --}}
<div class="modal fade" id="ratemodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Shipping Charges Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="rateform" novalidate method="POST" action="{{ route('store-charges') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Select Country</label>
                                    <select class="form-select" name="country_idd" required id="country_idd"
                                        class="form-control table-responsive @error('country_idd') is-invalid @enderror">
                                        <option value="">-----</option>
                                        @foreach ($countries as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                {{-- -{{ $country->charges }} --}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="course" class="form-label">Selected Region
                                        <code>*</code></label>
                                    <select class="form-control" name="region_idd" id="region_idd">

                                    </select>
                                    @error('region_idd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            {{-- first row closed --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Desired Currency</label>
                                    <select class="form-select" name="currency_idd" required id="currency_idd"
                                        class="form-control table-responsive @error('currency_idd') is-invalid @enderror">
                                        <option value="">-----</option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}">{{ $currency->name }}
                                                {{-- -{{ $country->charges }} --}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('currency_idd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="course" class="form-label">Desired
                                        Symbol<code>*</code></label>
                                    <input type="text" name="symbol" id="symbol_idd" class="form-control"
                                        value="" readonly>
                                    @error('symbol_idd')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- row closed --}}
                            {{-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (0-500)gm </label>
                                    <input type="number" id="gm0_500" placeholder="Enter Price for (0-500)gm "
                                        required class="form-control @error('gm0_500') is-invalid @enderror"
                                        name="gm0_500" value="{{ old('0_500g') }}" required
                                        autocomplete="gm0_500" autofocus>

                                    @error('gm0_500')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (501-1000)gm </label>
                                    <input type="number" id="gm501_1000"
                                        placeholder="Enter Price for (501-1000)gm " required
                                        class="form-control @error('gm501_1000') is-invalid @enderror"
                                        name="gm501_1000" value="{{ old('gm501_1000') }}" required
                                        autocomplete="gm501_1000" autofocus>

                                    @error('gm501_1000')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            {{-- row closed --}}
                            {{-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (1001-1500)gm </label>
                                    <input type="number" id="gm1001_1500"
                                        placeholder="Enter Price for (1001-1500)gm " required
                                        class="form-control @error('gm1001_1500') is-invalid @enderror"
                                        name="gm1001_1500" value="{{ old('gm1001_1500') }}" required
                                        autocomplete="gm1001_1500" autofocus>

                                    @error('gm1001_1500')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (1501-2000)gm </label>
                                    <input type="number" id="gm1501_2000"
                                        placeholder="Enter Price for (1501-2000)gm " required
                                        class="form-control @error('gm1501_2000') is-invalid @enderror"
                                        name="gm1501_2000" value="{{ old('gm1501_2000') }}" required
                                        autocomplete="gm1501_2000" autofocus>

                                    @error('gm1501_2000')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            {{-- row closed --}}
                            {{-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (2001-5000)gm </label>
                                    <input type="number" id="gm2001_5000"
                                        placeholder="Enter Price for (2001-5000)gm " required
                                        class="form-control @error('gm2001_5000') is-invalid @enderror"
                                        name="gm2001_5000" value="{{ old('gm2001_5000') }}" required
                                        autocomplete="gm2001_5000" autofocus>

                                    @error('gm2001_5000')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Weight (above-5000)gm
                                    </label>
                                    <input type="number" id="gm5000_above"
                                        placeholder="Enter Price for (above-2000)gm " required
                                        class="form-control @error('gm5000_above') is-invalid @enderror"
                                        name="gm5000_above" value="{{ old('gm5000_above') }}" required
                                        autocomplete="gm5000_above" autofocus>

                                    @error('gm5000_above')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="rateform" class="btn btn-primary " id="modal_submit"
                            value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Transaction Modal -->
<div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
    aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="assets/images/product/img-7.png" alt=""
                                            class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                    </div>
                                </td>
                                <td>$ 255</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div>
                                        <img src="assets/images/product/img-4.png" alt=""
                                            class="avatar-sm">
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                    </div>
                                </td>
                                <td>$ 145</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Shipping:</h6>
                                </td>
                                <td>
                                    Free
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <h6 class="m-0 text-right">Total:</h6>
                                </td>
                                <td>
                                    $ 400
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- end modal -->

<!--*************---Javascript---******************-->

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
