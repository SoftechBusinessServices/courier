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
                                <p class="card-title-desc text-dark mb-2 py-1 px-2 rounded" style="background-color: #d6dbf8">
                                    <span class="font-size-20 font-weight-bold">Vendor Payment Details</span>
                                </p>
                                <form method="get" id="searchForm">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <select name="vendor" id="vendor-payment-select" class="form-control"
                                                    onchange="$('#searchForm').submit()">
                                                    <option value="" class="form-control">Select Vendor</option>
                                                    {{-- @dd($vendors) --}}
                                                    @foreach ($companies as $company)
                                                        <option class="form-control" value="{{ $company->id }}" @if(request()->vendor == $company->id) selected @endif>
                                                            {{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-1 offset-3">

                                    </div>
                            </div>
                            </form>
                            <div class="row">
                                <div class="col-5">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Date</td>
                                                <td>Parcel ID</td>
                                                <td>Tracking ID</td>
                                                <td>Vendor Charges</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allocated_parcels as $row)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{date('d F Y',strtotime($row->created_at))}}</td>
                                                    <td>{{$row->pl_id}}</td>
                                                    <td>{{$row->vendor_tracking_id}}</td>
                                                    <td>{{$row->vendor_tracking_charges}}</td>
                                                </tr>
                                            @empty
                                                <p>No data</p>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div>
                                <div class="col-5">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Date</td>
                                                <td>Paid Amount</td>
                                                <td>Remaing Amount </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($payment_logs as $row)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{date('d F Y',strtotime($row->created_at))}}</td>
                                                    <td>{{$row->collected_amount}}</td>
                                                    <td>{{$row->remaining_amount}}</td>
                                                    {{-- <td>{{$row->vendor_tracking_charges}}</td> --}}
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="text-danger">
                                                            No record ..
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-2">
                                  
                                        <table class="table table-sm">
                                            <tr>
                                                <th>Total Payable: </th>
                                                <td><input type="text" name="vendor_total_payable" value=" {{$totalAmount}}"></td>
                                            </tr>
                                            <tr>
                                                <th>Total Paid: </th>
                                                <td><input type="text" name="vendor_total_paid" value="{{$totalpaid}}"></td>
                                            </tr>
                                            <tr>
                                                <th>Total Dues: </th>
                                                @php
                                                $dues = $totalAmount-$totalpaid;
                                                @endphp
                                                <td><input type="text" name="vendor_total_dues" value="{{ $dues}}"></td>
                                            </tr>
                                        </table>
                                          
                                   
                                    
                                    

                                </div>
                            </div>

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
@endsection
