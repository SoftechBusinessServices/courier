@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container">
                {{-- @dd($data); --}}
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            {{--  <h4 class="mb-sm-0 font-size-18">Detail</h4>  --}}
                            <h4 class="float-end font-size-16"> Dispatch Notes Receipt </h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0 text-bold text-decoration-underline">
                                    <li class="breadcrumb-item">Tracking ID:PL-12345</li>
                                    <li class="breadcrumb-item  text-bold">Dated:{{ date('d/y/m') }}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    {{--  <h4 class="float-end font-size-16"> Dispatch Notes Receipt </h4>  --}}
                                    <div class="mb-0">
                                        <div class="row">
                                            <div class="col">
                                                <img src="assets/images/courier-logo.png" alt="logo" height="60" />
                                            </div>
                                            <div class="col">
                                                <label for="">SBS Courier Services</label><br>
                                               <p>Email: sbsservice@mail.com</p>
                                            </div>
                                            <div class="col">
                                                <label for="">Phone: 091-21336444</label><br>
                                                <p>Address: G15 markaz, Green Acre Plaza, Islamabad, Pakistan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class=" ">
                                    <h3 class="font-size-15 fw-bold">Parcel Details</h3>

                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>No of Boxes</th>
                                                <th>Weight</th>
                                                <th>Service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>4</td>
                                                <td>12</td>
                                                <td>DHL Via Dubai</td>
                                            </tr>
                                        </tbody>
                                        <hr>
                                    </table>
                                </div>

                                <hr>
                                <div class="">
                                    <h3 class="font-size-15 fw-bold">Dispatch Note</h3>
                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                                <th>Condition</th>
                                                <th>Currency</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Shoes</td>
                                                <td>Used</td>
                                                <td>PKR</td>
                                                <td>200</td>
                                                <td>50</td>
                                            </tr>
                                        </tbody>
                                        <hr>
                                    </table>
                                </div>

                                <hr>
                                <div class="">
                                    <h3 class="font-size-15 fw-bold">Sender Details</h3>
                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Contact Number</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Zip Code</th>
                                                <th>Address Line1</th>
                                                <th>Address Line2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Softech Business Services</td>
                                                <td>03109488696</td>
                                                <td>Pakistan</td>
                                                <td>Khyber Pakhtunkhwa</td>
                                                <td>Peshawar</td>
                                                <td>25000</td>
                                                <td>Khyber Bazar, Peshawar</td>
                                                <td>Charsadda Road, Peshawar</td>

                                            </tr>
                                        </tbody>
                                        <hr>
                                    </table>
                                </div>

                                <hr>
                                <div class="">
                                    <h3 class="font-size-15 fw-bold">Receiver Details</h3>
                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Receiver Name</th>
                                                <th>Contact Number</th>
                                                <th>Business Name</th>
                                                <th>Country</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Zip Code</th>
                                                <th>Address Line1</th>
                                                <th>Address Line2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Qazi Wajid Iqbal</td>
                                                <td>03451231211</td>
                                                <td>Apex College Lahore</td>
                                                <td>Pakistan</td>
                                                <td>Punjab</td>
                                                <td>Lahore</td>
                                                <td>25000</td>
                                                <td>Hall Road, Lahore</td>
                                                <td>Fazal e Haq Rd, Gulshan Block</td>

                                            </tr>
                                        </tbody>
                                        <hr>
                                    </table>
                                </div>

                                <div class="d-print-none">
                                    <div class="float-end">
                                        <a href="{{ route('home') }}"
                                        class="btn btn-dark btn-md text-white btn-sm m-2 p-2">Dashboard </a>
                                        <a href="javascript:window.print()"
                                            class="btn btn-success waves-effect waves-light me-1"><i
                                                class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        {{-- <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div> --}}
    @endsection
