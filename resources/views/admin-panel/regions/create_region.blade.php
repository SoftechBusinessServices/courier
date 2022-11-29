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
                                <p class="card-title-desc text-dark mb-2 py-4 px-2 rounded" style="background-color: #d6dbf8">
                                    <span class="font-size-20 font-weight-bold">Regions Details</span>
                                </p>
                                @if (isset($data))
                                <table id="datatable-buttons"
                                class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Countries</th>
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
                                                        <td>
                                                            <a class="btn btn-outline-primary btn-sm plus_btn" title="add"
                                                                data-bs-toggle="modal" data-bs-target="#countrymodal" id="{{ $item->id }}">
                                                                <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                            <span class="text-dark">|</span>
                                                            <a href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-primary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>

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
                                                        <td style="">

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

    <div class="modal fade" id="countrymodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Country Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="{{ url('store-country') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <input type="hidden" name="region_id" value="" id="region_id">
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td><input type="text" name="addMoreInputFields[0][country_name]"
                                            placeholder="Enter Country" class="form-control" />
                                    </td>
                                    <td><button type="button" name="add" id="dynamic-ar"
                                            class="btn btn-outline-primary">Add Country</button></td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-outline-success btn-block">Save</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <script type="text/javascript">
            var i = 0;
            $("#dynamic-ar").click(function () {
                ++i;
                $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
                    '][country_name]" placeholder="Enter Country Name" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                    );
            });
            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });

            $('.plus_btn').on('click', function(e){
                e.preventDefault();
                console.log(this.id);
                $('#region_id').val(this.id);
            });
        </script>
    @endsection
