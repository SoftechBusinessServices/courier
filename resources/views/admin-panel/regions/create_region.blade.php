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
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white">Back</a>
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                    <span class="font-size-20 font-weight-bold"> Countries under selected 
                                        <a href="#"> Region</a>

                                    </span>
                                   
                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm text-center">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Countries</th>
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
                                                        <td>
                                                           
                                                            <a href="{{ url('create-country/'.$item->id) }}"
                                                                class="btn btn-outline-primary btn-sm delete"
                                                                title="add">
                                                                <i class="fas fa-plus-circle"></i>
                                                            </a>
                                                            <span class="text-dark">|</span>
                                                            {{ $item->count() }}  
                                                            <span class="text-dark">|</span>
                                                            <a href="{{ url('fetch-region/' . $item->id) }}"
                                                                class="btn btn-outline-primary btn-sm delete"
                                                                title="View">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                                                                                    
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
@endsection
