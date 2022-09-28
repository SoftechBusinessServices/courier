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

                                    {{--  <a class="btn btn-success btn-md text-white " data-bs-toggle="modal"
                                        data-bs-target="#countrymodal">Add Country</a>  --}}
                                    <span class="font-size-22 font-weight-bold ml-4"> Edit Service Form
                                    </span>
                                    <form class="needs-validation" novalidate action="{{ url('update-service/' . $record->id) }}"
                                        method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    {{-- <label for="validationCustom01" class="form-label">Category Name:</label> --}}
                                                    <input type="text" name="service_name" class="form-control"
                                                        id="validationCustom01" value="{{ $record->service_name }}" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
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

                                </p>
                                <hr>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Service Name</th>
                                                <th>Date</th>
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
                                                        <td>{{ $item->service_name }}</td>
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
                                                        <td style="">

                                                            <a href="{{ url('edit-service/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm delete"
                                                                title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-service/' . $item->id) }}"
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


@endsection
