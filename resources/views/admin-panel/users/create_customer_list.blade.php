@extends('admin-panel.index')

@section('content')
    {{-- <div class="main-content container"> --}}

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">
                                <p class="card-title-desc text-dark mb-2 py-4 rounded" style="background-color: #d6dbf8">


                                    {{--  <a class="btn btn-success btn-md text-white " data-bs-toggle="modal"
                                        data-bs-target="#countrymodal">Add Country</a>  --}}
                                    <span class="font-size-22 font-weight-bold ml-2"> Customers List
                                    </span>
                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Customer Name</th>
                                                <th>Phone Number</th>
                                                <th>Date</th>
                                               

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            {{-- @dd($data); --}}
                                            @if ($data->count() > 0)
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->company_name }}</td>
                                                        <td>{{ $item->shipper_phone }}</td>
                                                        <td>
                                                            @php
                                                                $month = date('d/m/Y', strtotime($item->created_at));
                                                                // dd($month);
                                                                echo $month;
                                                            @endphp
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

                                <div class="d-flex justify-content-between my-2">
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white">&#60; Back</a>
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                </div>
                            </div>


                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}


@endsection
