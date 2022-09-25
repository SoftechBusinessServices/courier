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
                                <p class="card-title-desc text-dark">
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                    <a href="{{ route('add-region') }}" class="btn btn-primary btn-md text-white">Back</a>
                                    <a class="btn btn-success btn-md text-white " data-bs-toggle="modal"
                                        data-bs-target="#representmodal">Add Representative</a>
                                    <span class="font-size-22 font-weight-bold ml-2"> Countries under selected Regions
                                    </span>
                                </p>
                                <hr>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm display">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Company</th>
                                                <th>Representatives</th>
                                                {{--  <th>Code</th>  --}}
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
                                                        <td class="bg-secondary text-white">{{ $item->companies->fname." ".$item->companies->lname}}</td>
                                                        <td>{{ $item->represent_name }}</td>
                                                        {{--  <td>{{ $item->code }}</td>  --}}

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
@endsection 

<div class="modal fade" id="representmodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Company Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="representform" novalidate method="POST"
                    action="{{ route('store-representator') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                {{-- <div class="col-md-12 mb-0">
                                    <label for="useremail" class="form-label">Select Company</label>
                                    <select class="form-select" name="company_id" required
                                        class="form-control table-responsive @error('company_id') is-invalid @enderror"
                                        value="{{ old('company_id') }}">
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">
                                                {{ $company->fname . ' ' . $company->lname }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('company_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="col-md-12 mb-0">
                                    <label for="username" class="form-label">Representative Name</label>
                                    <input type="text" id="username" placeholder="Enter Representative name"
                                        class="form-control @error('represent_name') is-invalid @enderror"
                                        name="represent_name" value="{{ old('represent_name') }}" required
                                        autocomplete="represent_name" autofocus>

                                    <input type="hidden" name="company_id" id="company_id" value="{{$company_id}}">
                                    @error('represent_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-0">
                                    <label for="useremail" class="form-label">Representative Email</label>
                                    <input type="email" id="useremail" placeholder="Enter email"
                                        class="form-control @error('represent_email') is-invalid @enderror"
                                        name="represent_email" value="{{ old('represent_email') }}" autocomplete="represent_email"
                                        required>

                                    @error('represent_email')
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
                        <div class="col-md-12 mb-0">
                            <label for="username" class="form-label">Representative Phone Number</label>
                            <input type="text" data-inputmask="'mask': '0399-99999999'" type="number"
                                maxlength="12" class="form-control @error('phone') is-invalid @enderror"
                                name="represent_phone" value="{{ old('represent_phone') }}" required autocomplete="represent_phone"
                                autofocus>

                            @error('represent_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-0">
                            <label for="address" class="form-label">Representative CNIC</label>
                            <input type="text" type="number"
                                maxlength="13" class="form-control @error('represent_cnic') is-invalid @enderror"
                                name="represent_cnic" value="{{ old('represent_cnic') }}" required autocomplete="phone"
                                autofocus>
                            @error('represent_cnic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="representform" class="btn btn-primary "
                            id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1"
                            data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>

