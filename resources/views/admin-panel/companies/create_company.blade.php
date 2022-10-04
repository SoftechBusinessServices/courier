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

                                    {{-- <a class="btn btn-success btn-md text-white " data-bs-toggle="modal"
                                        data-bs-target="#countrymodal">Add Country</a> --}}
                                    <span class="font-size-22 font-weight-bold ml-2"> Countries under selected Regions
                                    </span>
                                </p>
                                <hr>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive ">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>First Name </th>
                                                <th>Last Name </th>
                                                <th>Email</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Phone</th>
                                                {{-- <th>Country</th> --}}
                                                <th>Address</th>
                                                <th>NTN -No</th>
                                                <th>Website URL</th>
                                                {{--  <th>Joining date</th>  --}}
                                                {{--  <th>Status</th>  --}}
                                                <th>Representatives</th>
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
                                                        <td>{{ $item->fname }}</td>
                                                        <td>{{ $item->lname }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        {{-- <td>
                                                            <img src="{{ asset('uploads/customers/' . $item->image) }}"
                                                                alt="" width="50">
                                                        </td> --}}
                                                        <td>{{ $item->phone }}</td>
                                                        {{-- <td>{{ $item->country->name }}</td> --}}
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->ntn_no }}</td>
                                                        <td>{{ $item->web_url }}</td>

                                                        {{--  <td>
                                                            @php
                                                                $month = date('d/m/Y', strtotime($item->created_at));
                                                                // dd($month);
                                                                echo $month;
                                                            @endphp
                                                        </td>  --}}

                                                        {{--  <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td>  --}}

                                                        <td class="text-center">
                                                            <label for="">{{$data->count()}}</label>
                                                            |
                                                            <a href="{{ url('fetch-representative/' . $item->id) }}"
                                                                class="btn btn-outline-info  btn-sm delete" title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>|
                                                            <a href="{{ url('print-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-dark btn-sm print" title="Print">
                                                                <i class="fas fa-regular fa-print"></i>
                                                            </a>
                                                        </td>
                                                        <td style="width: 100px">


                                                            <a href="{{ url('edit-company/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-company/' . $item->id) }}"
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
                                    <a href="{{ route('add-region') }}" class="btn btn-primary btn-md text-white">Back</a>
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
