{{-- <div class="main-content"> --}}
<div class="">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <!--write your code here  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18"><a href="{{ route('home') }}">Dashboard</a></h4>

                            </div>
                        </div>
                    </div>
                    <!--dashboard row closed -->

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Total Parcels
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-gift font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $customers->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Total Customers
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center ">
                                                            <div
                                                                class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                <span class="avatar-title rounded-circle bg-info">
                                                                    <i class="bx bxs-user-check font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $companies->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Registered
                                                                Companies</p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center ">
                                                            <div
                                                                class="avatar-sm rounded-circle mini-stat-icon bg-warning">
                                                                <span class="avatar-title rounded-circle">
                                                                    <i class="bx bxs-school font-size-24 "></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Registered
                                                                Vendors</p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-gift font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $regions->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Assigned Regions
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-cart font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Deliverd Parcels
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-danger">
                                                                <span class="avatar-title">
                                                                    <i class="bx bxs-plane-alt font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Cancelled
                                                                Parcels</p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-window-close font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Pending Parcels
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div class="mini-stat-icon avatar-sm rounded-circle">
                                                                <span class="avatar-title ">
                                                                    <i
                                                                        class="bx bx-purchase-tag-alt font-size-24 "></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Cancelled
                                                                Parcels</p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-window-close font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Pending Parcels
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div class="mini-stat-icon avatar-sm rounded-circle">
                                                                <span class="avatar-title ">
                                                                    <i
                                                                        class="bx bx-purchase-tag-alt font-size-24 "></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Cancelled
                                                                Parcels</p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div
                                                                class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                <span class="avatar-title">
                                                                    <i class="bx bx-window-close font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="d-flex ">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 text-center">{{ $data->count() }}</h4>
                                                            <p class="text-muted fw-medium text-center">Pending Parcels
                                                            </p>
                                                        </div>

                                                        <div class="flex-shrink-0 align-self-center">
                                                            <div class="mini-stat-icon avatar-sm rounded-circle">
                                                                <span class="avatar-title ">
                                                                    <i
                                                                        class="bx bx-purchase-tag-alt font-size-24 "></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4 class="m-2">Parcels</h4>
                                            <hr>
                                        </div>
                                        <div class="card-body">

                                            <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- first row closed-->

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#home1"
                                                        role="tab">
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
                                            <div class="tab-content p-3 text-muted">
                                                <div class="tab-pane active" id="home1" role="tabpanel">
                                                    <p class="mb-0">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <h4 class="card-title">Settings</h4>
                                                            <div class="row">
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Countries
                                                                            </h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#countrymodal">Add</a>
                                                                            <a href="{{ route('add-country') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Currencies
                                                                            </h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#paisamodal">Add</a>
                                                                            <a href="{{ route('add-currency') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Shipping
                                                                                Charges</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#ratemodal">Add</a>
                                                                            <a href="{{ route('add-charges') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- doosri row -->
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Companies
                                                                            </h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#companymodal">Add</a>
                                                                            <a href="{{ route('add-company') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Vendors</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#vendormodal">Add</a>
                                                                            <a href="{{ route('add-vendor') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Dummy-1</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#dummy1modal">Add</a>
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Dummy-2</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#dummy1modal">Add</a>
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

                                                <div class="tab-pane" id="profile1" role="tabpanel">
                                                    <p class="mb-0">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <h4 class="card-title">Reports Section</h4>
                                                            <div class="row">
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center mb-0">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                    <i class="mdi mdi-update"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h6 class="font-size-14 mb-0">
                                                                                Daily Transactions
                                                                            </h6>
                                                                        </div>
                                                                        <div class="float-end mt-3">
                                                                            {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                        data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-primary">View
                                                                                Report</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center mb-0">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                    <i class="mdi mdi-update"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h6 class="font-size-14 mb-0">
                                                                                Daily Transactions
                                                                            </h6>
                                                                        </div>
                                                                        <div class="float-end mt-3">
                                                                            {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                        data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-primary">View
                                                                                Report</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center mb-0">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                    <i class="mdi mdi-update"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h6 class="font-size-14 mb-0">
                                                                                Daily Transactions
                                                                            </h6>
                                                                        </div>
                                                                        <div class="float-end mt-3">
                                                                            {{-- <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                                        data-bs-toggle="modal" data-bs-target="#regionmodal">Add</a> --}}
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-primary">View
                                                                                Report</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center mb-0">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-info font-size-18">
                                                                                    <i class="mdi mdi-update"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h6 class="font-size-14 mb-0">
                                                                                Daily Transactions
                                                                            </h6>
                                                                        </div>
                                                                        <div class="float-end mt-3">
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

                                                <div class="tab-pane" id="messages1" role="tabpanel">
                                                    <p class="mb-0">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <h4 class="card-title">Vouchers Section</h4>
                                                            <div class="row">
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
                                                                                class="btn btn-sm btn-primary">View</a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                                                    <div class="border p-3 rounded mt-4">
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="avatar-xs me-3">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                                                    <i class="mdi mdi-bitcoin"></i>
                                                                                </span>
                                                                            </div>
                                                                            <h5 class="font-size-14 mb-0">Regions</h5>
                                                                        </div>

                                                                        <div class="float-end mt-3">
                                                                            <a class="btn btn-sm btn-success waves-effect waves-light text-white"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#regionmodal">Add</a>
                                                                            <a href="{{ route('add-region') }}"
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

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h6 class="m-2">Latest Transaction</h6>
                                            <hr>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap mb-0 table-sm">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th style="width: 20px;">
                                                                <div class="form-check font-size-16 align-middle">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck01">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck01"></label>
                                                                </div>
                                                            </th>
                                                            <th class="align-middle">Order ID</th>
                                                            <th class="align-middle">Billing Name</th>
                                                            <th class="align-middle">Date</th>
                                                            <th class="align-middle">Total</th>
                                                            <th class="align-middle">Payment Status</th>
                                                            <th class="align-middle">Payment Method</th>
                                                            <th class="align-middle">View Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck02">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck02"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2540</a>
                                                            </td>
                                                            <td>Neal Matthews</td>
                                                            <td>
                                                                07 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $400
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck03">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck03"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2541</a>
                                                            </td>
                                                            <td>Jamal Burnett</td>
                                                            <td>
                                                                07 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $380
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-visa me-1"></i> Visa
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck04">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck04"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2542</a>
                                                            </td>
                                                            <td>Juan Mitchell</td>
                                                            <td>
                                                                06 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $384
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck05">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck05"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2543</a>
                                                            </td>
                                                            <td>Barry Dick</td>
                                                            <td>
                                                                05 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $412
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck06">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck06"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2544</a>
                                                            </td>
                                                            <td>Ronald Taylor</td>
                                                            <td>
                                                                04 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $404
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-visa me-1"></i> Visa
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check font-size-16">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="transactionCheck07">
                                                                    <label class="form-check-label"
                                                                        for="transactionCheck07"></label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);"
                                                                    class="text-body fw-bold">#SK2545</a>
                                                            </td>
                                                            <td>Jacob Hunter</td>
                                                            <td>
                                                                04 Oct, 2019
                                                            </td>
                                                            <td>
                                                                $392
                                                            </td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button"
                                                                    class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target=".transaction-detailModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div>
                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
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
                                <div class="col-md-6 mb-0">
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

                                <div class="col-md-6 mb-0">
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
                            </div>
                            {{-- first row closed --}}
                            <div class="row">
                                <div class="col-md-6 mb-0">
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
                                <div class="col-md-6 mb-0">
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
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 mb-0">
                                    <label for="username" class="form-label">Parcel Cost in </label>
                                    <div id="symbol_lable" class="d-inline text-danger">
                                    </div>
                                    <input type="hidden" name="pl_symbol" id="pl_symbol" value="">
                                    <div class="d-inline">
                                        <input type="number" id="pl_cost" placeholder="Enter Parcel Cost"
                                            class="form-control @error('pl_cost') is-invalid @enderror" name="pl_cost"
                                            required autocomplete="pl_cost" autofocus readonly>

                                        @error('pl_cost')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <label for="username" class="form-label">Parcel Extras Cost</label>
                                    <input type="number" id="pl_extras" placeholder="Enter Parcel Extra Cost"
                                        required class="form-control @error('pl_extras') is-invalid @enderror"
                                        name="pl_extras" value="{{ old('pl_extras') }}" required
                                        autocomplete="pl_extras" autofocus>

                                    @error('pl_extras')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-0">
                                    <label for="username" class="form-label">Parcel Discount</label>
                                    <input type="number" id="pl_discount" placeholder="Enter Parcel Discount"
                                        required class="form-control @error('pl_discount') is-invalid @enderror"
                                        name="pl_discount" value="{{ old('pl_discount') }}" required
                                        autocomplete="pl_discount" autofocus>

                                    @error('pl_discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-0">
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
                            </div>
                            <div class="row">
                                {{-- <div class="col-md-6 mb-0"> --}}
                                {{-- <label for="course" class="form-label">Selected --}}
                                {{-- Region<code>*</code></label> --}}
                                <input type="hidden" name="region_id" id="region_id" class="form-control"
                                    value="" readonly>
                                {{-- @error('region_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                {{-- </div> --}}
                                {{-- <div class="col-md-6 mb-0">
                                <label for="username" class="form-label">Amounts in Currency
                                </label> --}}
                                <input type="hidden" id="currency_id" class="form-control" autofocus
                                    name="currency_id" value="" readonly>

                                {{-- @error('currency_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                                {{-- </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-0">
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

{{-- ***************************Customer Modal************************************************ --}}
<div class="modal fade" id="vendormodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form2" novalidate method="POST" action="{{ route('store-customer') }}"
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
                                            <option value="{{ $company->id }}">{{ $company->name }}
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
                                    <label for="username" class="form-label">Customer Name</label>
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
                                    <label for="useremail" class="form-label">Customer Email</label>
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
                            <label for="username" class="form-label">Customer Phone Number</label>
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
                        <div class="col-md-12 mb-0">
                            <label for="address" class="form-label">Customer Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">

                                    </textarea>
                            @error('customer_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Customer CNIC Number</label>
                            <input type="text" data-inputmask="'mask': '99999-9999999-9'"
                                placeholder="XXXXX-XXXXXXX-X" name="cnic_no" required
                                class="form-control @error('cnic_no') is-invalid @enderror"
                                value="{{ old('cnic_no') }}" required autocomplete="cnic_no" autofocus>

                            @error('cnic_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-0">
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

{{-- ***************************Company Modal************************************************ --}}
<div class="modal fade" id="companymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Customer Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form3" novalidate method="POST" action="{{ route('store-company') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12 mb-0">
                                    <label for="username" class="form-label">Company Name</label>
                                    <input type="text" id="username" placeholder="Enter company name" required
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-0">
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
                        <div class="col-md-12 mb-0">
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
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Company NTN Number</label>
                            <input type="number" id="ntn_no" placeholder="Enter NTN Number" required
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
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Company Website URL</label>
                            <input type="url" id="web_url" name="web_url" required
                                class="form-control @error('web_url') is-invalid @enderror"
                                value="{{ old('web_url') }}" required autocomplete="company_url" autofocus>

                            @error('web_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-0">
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
                        <div class="col-md-12 mb-0">
                            <label for="address" class="form-label">Company Address</label>
                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">

                    </textarea>
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
                                <div class="col-md-6 mb-0">
                                    <label for="useremail" class="form-label">Destination Country</label>
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
                                <div class="col-md-6 mb-0">
                                    <label for="course" class="form-label">Destination Region
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
                                <div class="col-md-6 mb-0">
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
                                <div class="col-md-6 mb-0">
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
                            <div class="row">
                                <div class="col-md-6 mb-0">
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
                                <div class="col-md-6 mb-0">
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
                            </div>
                            {{-- row closed --}}
                            <div class="row">
                                <div class="col-md-6 mb-0">
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
                                <div class="col-md-6 mb-0">
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
                            </div>
                            {{-- row closed --}}
                            <div class="row">
                                <div class="col-md-6 mb-0">
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
                                <div class="col-md-6 mb-0">
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
                            </div>
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

                            $("#pl_weight").blur(function() {
                                // alert(23);
                                var total_charges = 0;
                                var pl_weight = $('#pl_weight').val();
                                var pl_weight = parseInt(pl_weight);
                                // alert(pl_weight);
                                if (pl_weight > '0' && pl_weight <= '500') {

                                    var wt_charges = parseInt(data.gm0_500);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('500gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '500' && pl_weight <= '1000') {

                                    var wt_charges = parseInt(data.gm501_1000);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('1000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '1000' && pl_weight <= '1500') {

                                    var wt_charges = parseInt(data.gm1001_1500);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('1500gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '1500' && pl_weight <= '2000') {

                                    var wt_charges = parseInt(data.gm1501_2000);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('2000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '2000' && pl_weight <= '5000') {

                                    var wt_charges = parseInt(data.gm2001_5000);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('5000gm');
                                    $('#pl_cost').val(wt_charges);
                                }
                                if (pl_weight > '5000') {

                                    var wt_charges = parseInt(data.gm5000_above);
                                    // alert(wt_charges);
                                    $('#chargeable_weight').val('above 5000gm');
                                    $('#pl_cost').val(wt_charges);
                                } else {

                                }
                            }); // weight blur function closed

                            $("#pl_discount").blur(function() {

                                var pl_cost = parseInt($('#pl_cost').val());
                                var pl_extras = parseInt($('#pl_extras').val());
                                var pl_discount = parseInt($('#pl_discount').val());
                                var pl_total = (pl_cost + pl_extras) - pl_discount;
                                $('#pl_final').val(pl_total);

                            }); // discount blur function closed

                        } else {
                            alert('data not found');

                        }
                    }
                });
            }
        });
        //country_id function closed

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

    });
</script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- apexcharts init -->
<script src="{{ asset('assets/js/pages/apexcharts.init.js') }}"></script>
