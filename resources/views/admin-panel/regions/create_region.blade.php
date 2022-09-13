@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{-- <a href="{{ url('add-region') }}" class="btn btn-primary ">New Region</a> --}}
                                </h4>
                                <p class="card-title-desc">
                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm ml-2">Home</a>
                                    <a href="{{ url('/prnpriview') }}" class="btn btn-info btn-sm ml-2">Print Preview</a>
                                </p>
                                <form class="needs-validation" novalidate action="{{ route('store-region') }}"
                                    method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
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
                                        <div class="col-md-6">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->

                </div>

                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title"></h4>
                                <h4 class="card-title-desc text-dark ">
                                    Product Categories Details
                                </h4>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead >
                                            <tr class="text-center">
                                                <th>S.No</th>
                                                <th>Region</th>
                                                {{-- <th>Subcategories</th> --}}
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
                                                        <td>{{ $item->name }}</td>
                                                        {{-- <td>
                                                            <a href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-primary btn-sm eye" title="View">
                                                                <i class="fa fa-list">&nbsp;View</i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('add-region/' . $item->id) }}"
                                                                class="btn btn-outline-primary btn-sm eye" title="View">
                                                                <i class="fa fa-plus-square">&nbsp;Add</i>
                                                            </a>
                                                        </td> --}}

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

                                                        <td style="">
                                                            <a href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-secondary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('edit-region/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm delete"
                                                                title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-region/' . $item->id) }}"
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
                            </div>

                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script> --}}
@endsection
