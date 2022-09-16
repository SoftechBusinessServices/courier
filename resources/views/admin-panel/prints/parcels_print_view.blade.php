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
                                    <li class="breadcrumb-item"><a href="{{ route('add-parcel') }}">Go Back</a></li>
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
                                    <h4 class="float-end font-size-16">Parcel Charges Details</h4>
                                    <div class="mb-4">
                                        <img src="assets/images/courier-logo.png" alt="logo" height="20" />
                                    </div>
                                </div>
                                <hr>
                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 fw-bold">Parcels Summary</h3>
                                </div>
                                <div class="text-center">
                                    <table class="table table-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Parcel_id</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Weight</th>
                                                <th>Chargeable</th>
                                                <th>Cost</th>
                                                <th>Extras</th>
                                                <th>Discount</th>
                                                <th>Final</th>
                                                <th>Delivery</th>
                                                <th>Description</th>
                                                <th>Parcel Date</th>
                                               
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
                                                    <td>{{ $item->pl_id }}</td>
                                                    <td>{{ $item->region->name }}</td>
                                                    <td>{{ $item->country->name }}</td>
                                                    <td>{{ $item->currency->name }}</td>
                                                    <td>{{ $item->pl_weight }}</td>
                                                    <td>{{ $item->chargeable_weight }}</td>
                                                    {{-- <td>{{ $item->pl_currency }}</td> --}}
                                                    <td>{{ $item->pl_cost }}</td>
                                                    <td>{{ $item->pl_extras }}</td>
                                                    <td>{{ $item->pl_discount }}</td>
                                                    <td>{{ $item->pl_symbol . ' ' . $item->pl_final }}</td>

                                                    <td>{{ $item->pl_description }}</td>
                                                    <td>{{ $item->pl_status }}</td>
                                                    <td>
                                                        @php
                                                            $month = date('d/m/Y', strtotime($item->pl_date));
                                                            // dd($month);
                                                            echo $month;
                                                        @endphp
                                                    </td>
                                                    <td style="">
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
