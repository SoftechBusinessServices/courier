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

                                <h4 class="card-title">Company Details
                                    <a href="{{ url('/home') }}" class="btn btn-primary btn-sm ml-2">Home</a>
                                    <a href="{{ url('/companies-print-view') }}" class="btn btn-info btn-sm ml-2">Print Preview</a>
                                </h4>
                                {{-- <p class="card-title-desc"><br>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        New Company
                                    </button>
                                </p> --}}
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm ">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Company</th>
                                                <th>Email</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>Address</th>
                                                <th>NTN -No</th>
                                                <th>Website URL</th>
                                                <th>Joining date</th>
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
                                                        <td>{{ $item->email }}</td>
                                                        {{-- <td>
                                                            <img src="{{ asset('uploads/customers/' . $item->image) }}"
                                                                alt="" width="50">
                                                        </td> --}}
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->country->name }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->ntn_no }}</td>
                                                        <td>{{ $item->web_url }}</td>
                                                        <td>
                                                            @php
                                                                $month = date('d/m/Y', strtotime($item->created_at));
                                                                // dd($month);
                                                                echo $month;
                                                            @endphp
                                                        </td>

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

                                                        <td style="width: 100px">
                                                            <a href="{{ url('print-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-dark btn-sm print" title="Print">
                                                                <i class="fas fa-regular fa-print"></i>
                                                            </a>

                                                            |
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
                    <h5 class="modal-title" id="transaction-detailModalLabel">Customer Registration</h5>
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
                                <form id="form1" novalidate method="POST" action="{{ route('store-company') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="col-md-12 mb-3">
                                                    <label for="username" class="form-label">Company Name</label>
                                                    <input type="text" id="username" placeholder="Enter company name"
                                                        required class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="useremail" class="form-label">Company Email</label>
                                                    <input type="email" id="useremail" placeholder="Enter company email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" autocomplete="email"
                                                        required>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- first row closed --}}
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="username" class="form-label">Company Phone Number</label>
                                            <input type="text" data-inputmask="'mask': '0399-99999999'" required
                                                type="number" maxlength="12"
                                                class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="username" class="form-label">Company NTN Number</label>
                                            <input type="number" id="ntn_no" placeholder="Enter NTN Number" required
                                                class="form-control @error('ntn_no') is-invalid @enderror" name="ntn_no"
                                                value="{{ old('ntn_no') }}" required autocomplete="ntn_no" autofocus>

                                            @error('ntn_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="username" class="form-label">Company Website URL</label>
                                            <input type="url" id="web_url" name="web_url" required
                                                class="form-control @error('web_url') is-invalid @enderror"
                                                value="{{ old('web_url') }}" required autocomplete="company_url"
                                                autofocus>

                                            @error('web_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="useremail" class="form-label">Select Country</label>
                                            <select class="form-select" name="country_id" required
                                                class="form-control table-responsive @error('country_id') is-invalid @enderror"
                                                value="{{ old('country_id') }}">
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->name }}
                                                        {{-- -{{ $country->charges }} --}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('country_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="address" class="form-label">Company Address</label>
                                            <textarea name="address" id="address" class="form-control" cols="1" rows="1">

                                        </textarea>
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
