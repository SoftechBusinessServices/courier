
@extends('admin-panel.index')

@section('content')
    <div class="main-content container">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">
                                <p class="card-title-desc text-dark mb-2 py-4 rounded px-2" style="background-color: #d6dbf8">

                                    <span class="font-size-20 font-weight-bold">Vendors List</a>
                                    </span>
                                </p>
                                @if (isset($data))
                                {{-- @dd($data); --}}
                                <table id="datatable-buttons"
                                    class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive ">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Logistic Name</th>
                                            <th>Vendor Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Joining date</th>
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
                                                    {{--  <td>{{ $item->companies->email }}</td>  --}}
                                                    <td>{{ $item->logistic_name }}</td>
                                                    <td>{{ $item->service->service_name}}</td>
                                                    <td>{{ $item->vendor_email }}</td>
                                                    <td>{{ $item->vendor_phone }}</td>
                                                    <td>{{ $item->vendor_address }}</td>
                                                    {{-- <td>{{ $item->countries->name}}</td> --}}
                                                    <td>
                                                        @php
                                                            $month = date('d/m/Y', strtotime($item->created_at));
                                                            // dd($month);
                                                            echo $month;
                                                        @endphp
                                                    </td>

                                                    {{--  <td>
                                                        @if ($item->status == 'inactive')
                                                            <button type="button" class="btn btn-danger  btn-sm">
                                                                {{ $item->status }} </button>
                                                        @else
                                                            <button type="button" class="btn btn-success btn-sm">
                                                                {{ $item->status }} </button>
                                                        @endif
                                                    </td>  --}}
                                                    </td>

                                                    <td style="width: 100px">
                                                        <a href="{{ url('print-parcel/' . $item->id) }}"
                                                            class="btn btn-outline-dark btn-sm print" title="Print">
                                                            <i class="fas fa-regular fa-print"></i>
                                                        </a>

                                                        |
                                                        <a href="{{ url('edit-logistic/' . $item->id) }}"
                                                            class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        |
                                                        <a href="{{ url('delete-logistic/' . $item->id) }}"
                                                            class="btn btn-outline-danger btn-sm delete" title="Delete"
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



                                <!-- Back & Dashboard btns -->
                                <div class="d-flex justify-content-between my-2">
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white">Back</a>
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                </div>
                            </div>


                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

