
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
                                            <h5>How to Get Data Between Two Dates in Laravel 8 - <span class="text-primary">MyWebTuts.com</span></h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{ route('daily.report') }}" method="get">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Start Date</label>
                                                        <input type="date" class="form-control" name="start_date">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">End Date</label>
                                                        <input type="date" class="form-control" name="end_date">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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

      

