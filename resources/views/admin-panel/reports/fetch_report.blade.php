@extends('admin-panel.index')

@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <!--write your code here  -->
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-8 offset-2">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5>How to Get Data Between Two Dates in Laravel 8 - <span class="text-primary">MyWebTuts.com</span> <a href="{{ route('report')}}" class="btn btn-sm btn-secondary float-right"><i class="fa fa-plus"></i></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Parcel Id</th>
                                                    <th>Country</th>
                                                    <th>Created At</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($users) && $users->count())
                                                @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $user->pl_id }}</td>
                                                    <td>{{ $user->country->name }}</td>
                                                    <td><span class="badge badge-success">{{ $user->created_at }}</span></td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td colspan="4" class="text-center">There Are No Data Found</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection