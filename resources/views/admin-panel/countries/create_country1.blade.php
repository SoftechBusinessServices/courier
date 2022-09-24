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
                                        data-bs-target="#countrymodal">Add Country</a>
                                    <span class="font-size-22 font-weight-bold ml-2"> Countries under selected Regions
                                    </span>
                                </p> <hr>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Date</th>
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
                                                        <td class="">{{ $item->region->name }}</td>
                                                        <td>{{ $item->name }}</td>
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
    <!--country modal -->
    <div class="modal fade" id="countrymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Country Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="countryform" novalidate method="POST" action="{{ route('store-country') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">

                                    <div class="col-md-12 mb-0">
                                        <label for="username" class="form-label">Country Name</label>
                                        <input type="text" id="username" placeholder="Enter country name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="region_id" value="{{ $region->id }}">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <!-- Toogle to second dialog -->
                    <button type="submit" form="countryform" class="btn btn-primary " id="modal_submit"
                        value="Submit">Submit</button>
                    <button type="button" class="btn btn-secondary" id="modal_close1"
                        data-bs-dismiss="modal">Close</button>
                </div>
                </form>

            </div>
        </div>
    </div>

@endsection
