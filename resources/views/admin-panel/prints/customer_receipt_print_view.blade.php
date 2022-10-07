@extends('admin-panel.index')

@section('content')
<div class="">

    <div class="page-content px-0 " style=" padding:0px;padding-top:75px;">
        <div class="container p-0">
            {{-- @dd($data); --}}
            <!-- start page title -->
            <div class="row ">
                <div class="col-12 ">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between p-1 px-3">
                        {{-- <h4 class="mb-sm-0 font-size-18">Detail</h4>  --}}
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
                        <div class="card-body px-3 py-0">
                            <div class="invoice-title">
                                {{-- <h4 class="float-end font-size-16">Customer Receipt </h4>  --}}
                                <div class="mb-0">
                                    <div class="row">
                                        <div class="col">
                                            <img src="assets/images/courier-logo.png" alt="logo" height="50" />
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
                            <hr class="m-0 mb-2">
                            <div class=" ">
                                <h3 class="font-size-15 fw-bold">Parcel Details</h3>

                            </div>
                            <div class="text-center">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">No of Boxes</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Weight</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Service</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">4</td>
                                                <td class="py-1 px-0 font-size-14">12</td>
                                                <td class="py-1 px-0 font-size-14">DHL Via Dubai</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <hr class="m-0 mb-2">
                            <!-- <div class="">
                                <h3 class="font-size-15 fw-bold">Dispatch Note</h3>
                            </div>
                            <div class="text-center">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Content</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Condition</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Currency</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Price</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Quantity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">Shoes</td>
                                                <td class="py-1 px-0 font-size-14">Used</td>
                                                <td class="py-1 px-0 font-size-14">PKR</td>
                                                <td class="py-1 px-0 font-size-14">200</td>
                                                <td class="py-1 px-0 font-size-14">50</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div> -->

                           
                            <hr class="m-0 mb-2">
                            <div class="">
                                <h3 class="font-size-15 fw-bold">Receiver Details</h3>
                            </div>
                            <div class="text-center">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Receiver Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Number</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Business Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Country</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">State</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">City</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line1</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">Qazi Wajid Iqbal</td>
                                                <td class="py-1 px-0 font-size-14">03451231211</td>
                                                <td class="py-1 px-0 font-size-14">Apex College Lahore</td>
                                                <td class="py-1 px-0 font-size-14">Pakistan</td>
                                                <td class="py-1 px-0 font-size-14">Punjab</td>
                                                <td class="py-1 px-0 font-size-14">Lahore</td>
                                                <td class="py-1 px-0 font-size-14">25000</td>
                                                <td class="py-1 px-0 font-size-14">Hall Road, Lahore</td>
                                                <td class="py-1 px-0 font-size-14">Fazal e Haq Rd, Gulshan Block</td>

                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>


                            <hr class="m-0 mb-2">
                            <div class="">
                                <h3 class="font-size-15 fw-bold">Sender Details</h3>
                            </div>
                            <div class="text-center">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Company Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Number</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Country</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">State</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">City</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line1</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">Softech Business Services</td>
                                                <td class="py-1 px-0 font-size-14">03109488696</td>
                                                <td class="py-1 px-0 font-size-14">Pakistan</td>
                                                <td class="py-1 px-0 font-size-14">Khyber Pakhtunkhwa</td>
                                                <td class="py-1 px-0 font-size-14">Peshawar</td>
                                                <td class="py-1 px-0 font-size-14">25000</td>
                                                <td class="py-1 px-0 font-size-14">Khyber Bazar, Peshawar</td>
                                                <td class="py-1 px-0 font-size-14">Charsadda Road, Peshawar</td>

                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            
                            <div class="d-print-none">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between"> <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white btn-sm m-2 px-2">Back </a>
                                        <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white btn-sm m-2 px-2">Dashboard </a>
                                    </div>
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 px-3"><i class="fa fa-print"></i></a>
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