@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">
                {{-- @dd($data); --}}
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">
                                <p class="card-title-desc text-dark mb-2 py-1 px-2 rounded" style="background-color: #d6dbf8">
                                    <span class="font-size-20 font-weight-bold">Customer Payment Details</span>
                                </p>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select name="" id="vendor-payment-select" class="form-control">
                                                <option value="" class="form-control">Select Customer</option>
                                                @foreach ($shipper_names as $shipper_name)
                                                    <option class="form-control" value="{{ $shipper_name->company_name }}">
                                                        {{ $shipper_name->company_name }}</option>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-1 offset-3">

                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6">
                                    @if (isset($data))

                                        <table id="datatable"
                                            class="table table-bordered dt-responsive  nowrap w-100 table-sm text-center">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Payment Method</th>
                                                    <th>Status</th>
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
                                                            <td>{{ $item->payment_method }}</td>

                                                            <td>
                                                                @if ($item->status == 'inactive')
                                                                    <button type="button" class="btn btn-danger  btn-sm">
                                                                        {{ $item->status }} </button>
                                                                @else
                                                                    <button type="button" class="btn btn-success btn-sm">
                                                                        {{ $item->status }} </button>
                                                                @endif
                                                            </td>
                                                            <td style="">

                                                                <a href="{{ url('edit-payment-method/' . $item->id) }}"
                                                                    class="btn btn-outline-warning btn-sm delete"
                                                                    title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                |
                                                                <a href="{{ url('delete-payment-method/' . $item->id) }}"
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
                                <div class="col-md-6">
                                    @if (isset($data))
                                        <table id="datatable"
                                            class="table table-bordered dt-responsive  nowrap w-100 table-sm text-center">

                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Payment Method</th>
                                                    <th>Status</th>
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
                                                            <td>{{ $item->payment_method }}</td>

                                                            <td>
                                                                @if ($item->status == 'inactive')
                                                                    <button type="button" class="btn btn-danger  btn-sm">
                                                                        {{ $item->status }} </button>
                                                                @else
                                                                    <button type="button" class="btn btn-success btn-sm">
                                                                        {{ $item->status }} </button>
                                                                @endif
                                                            </td>
                                                            <td style="">

                                                                <a href="{{ url('edit-payment-method/' . $item->id) }}"
                                                                    class="btn btn-outline-warning btn-sm delete"
                                                                    title="Edit">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>
                                                                |
                                                                <a href="{{ url('delete-payment-method/' . $item->id) }}"
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
                            </div>

                            <!-- Back & Dashboard btns -->
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
    </div>


@endsection
