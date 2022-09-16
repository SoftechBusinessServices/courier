@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">
                {{-- @dd($data); --}}
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Detail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
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
                                    <h4 class="float-end font-size-16">Shipping Charges Details</h4>
                                    <div class="mb-4">
                                        <img src="assets/images/courier-logo.png" alt="logo" height="20" />
                                    </div>
                                </div>
                                <hr>
                                {{-- <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                        <strong>Billed To:</strong><br>
                                        John Smith<br>
                                        1234 Main<br>
                                        Apt. 4B<br>
                                        Springfield, ST 54321
                                    </address>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <address class="mt-2 mt-sm-0">
                                        <strong>Shipped To:</strong><br>
                                        Kenny Rigdon<br>
                                        1234 Main<br>
                                        Apt. 4B<br>
                                        Springfield, ST 54321
                                    </address>
                                </div>
                            </div> --}}
                                {{-- <div class="row">
                                <div class="col-sm-6 mt-3">
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Visa ending **** 4242<br>
                                        jsmith@email.com
                                    </address>
                                </div>
                                <div class="col-sm-6 mt-3 text-sm-end">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        October 16, 2019<br><br>
                                    </address>
                                </div>
                            </div> --}}
                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 fw-bold">Shipping Charges Summary</h3>
                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Symbol</th>
                                                <th>(500)gm</th>
                                                <th>(1000)gm</th>
                                                <th>(1500)gm</th>
                                                <th>(2000)gm</th>
                                                <th>(5000)gm</th>
                                                <th>(a5000)gm</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @if ($data->count() > 0)
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->region->name }}</td>
                                                        <td>{{ $item->country->name }}</td>
                                                        <td>{{ $item->currency->name }}</td>
                                                        <td>{{ $item->symbol }}</td>
                                                        <td>{{ $item->gm0_500 }}</td>
                                                        <td>{{ $item->gm501_1000 }}</td>
                                                        <td>{{ $item->gm1001_1500 }}</td>
                                                        <td>{{ $item->gm1501_2000 }}</td>
                                                        <td>{{ $item->gm2001_5000 }}</td>
                                                        <td>{{ $item->gm5000_above }}</td>
                                                        <td>
                                                            <a href="{{ url('print-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-dark btn-sm print" title="Print">
                                                                <i class="fas fa-regular fa-print"></i>
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
                                </div>
                                <div class="d-print-none">
                                    <div class="float-end">
                                        <a href="javascript:window.print()"
                                            class="btn btn-success waves-effect waves-light me-1"><i
                                                class="fa fa-print"></i></a>
                                        <a href="javascript: void(0);"
                                            class="btn btn-primary w-md waves-effect waves-light">Send</a>
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
