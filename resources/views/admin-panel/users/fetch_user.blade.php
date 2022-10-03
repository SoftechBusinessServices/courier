{{-- @extends('admin-panel.index')

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
                                <p class="card-title-desc text-dark">
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white">Back</a>
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                    <span class="font-size-20 font-weight-bold"> Countries under selected <a href="{{ route('add-region') }}"> Regions</a>

                                    </span>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Start Date</label>
                                                <input type="date" class="form-control" name="start_date">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">End Date</label>
                                                <input type="date" class="form-control" name="end_date">
                                            </div>
                                        </div>
                                    </div>


                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Code</th>
                                                <th>Status</th>

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
                                                        <td class="bg-secondary text-white">{{ $item->region->name }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->code }}</td>

                                                        <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td>
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
@endsection --}}

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
                                <p class="card-title-desc text-dark mb-2 py-4 rounded" style="background-color: #d6dbf8">

                                    <span class="font-size-20 font-weight-bold ml-3">Registered Users List
                                        {{-- <a href="{{ route('add-region') }}"> Regions</a> --}}

                                    </span>
                                </p>

                                @if (isset($data))
                                    {{--  two lines od dic add for responsiveness  --}}
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100 table-sm text-center">

                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>User Name</th>
                                                        <th>User Email</th>
                                                        <th>Joining Date</th>
                                                        {{-- <th>Status</th> --}}
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
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->email }}</td>
                                                                <td>
                                                                    @php
                                                                        $month = date('d/m/Y', strtotime($item->created_at));
                                                                        // dd($month);
                                                                        echo $month;
                                                                    @endphp
                                                                </td>
                                                                {{-- <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td> --}}
                                                                <td>

                                                                    {{-- <a href="{{ url('edit-country/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a> | --}}
                                                                    <a href="{{ url('delete-user/' . $item->id) }}"
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



                                </tbody>
                                </table>
                                    <div class="float-end">
                                        <a href="{{ route('home') }}"
                                        class="btn btn-dark btn-md text-white btn-sm m-2 p-2">Dashboard </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
