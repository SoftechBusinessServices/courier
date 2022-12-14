@extends('admin-panel.index')

@section('content')
    <div class="">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->

                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Country Details
                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm ml-2">Home</a>
                                    {{-- <button type="button"
                                    class="btn btn-success btn-sm btn-rounded waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                    New country
                                </button> --}}
                                <a href="{{ url('countries-print-view') }}" class="btn btn-info btn-sm ml-2">Print Preview</a>
                                </h4>
                                <p class="card-title-desc"><br>
                                    <!-- Button trigger modal -->

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
                                                        <td>{{ $item->region->name }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->code }}</td>
                                                        {{-- <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td> --}}
                                                        </td>

                                                        <td style="width: 100px">
                                                            <a href="{{ url('edit-country/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-country/' . $item->id) }}"
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

    <!-- Transaction Modal -->
    <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
        aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="transaction-detailModalLabel">Country Registration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                    <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p> --}}

                    <div class="table-responsive">

                        <table class="table align-middle table-nowrap">
                            <thead>

                            </thead>
                            <tbody>
                                <form id="form1" novalidate method="POST" action="{{ route('store-country') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="useremail" class="form-label">Choose Region</label>
                                                    <select class="form-select" name="region_id" required id="region_id"
                                                        class="form-control table-responsive @error('region_id') is-invalid @enderror">
                                                        <option value="">-----</option>
                                                        @foreach ($regions as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                                {{-- -{{ $country->charges }} --}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('region_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="username" class="form-label">Country Name</label>
                                                    <input type="text" id="username" placeholder="Enter country name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="username" class="form-label">Country Code</label>
                                                    <input type="text" id="username" placeholder="Enter country code"
                                                        class="form-control @error('code') is-invalid @enderror"
                                                        name="code" value="{{ old('code') }}" required
                                                        autocomplete="code" autofocus>

                                                    @error('code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" form="form1" class="btn btn-primary " id="modal_submit"
                                        value="Submit">Submit</button>
                                    <button type="button" class="btn btn-secondary" id="modal_close"
                                        data-bs-dismiss="modal">Close</button>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end modal -->

@endsection
