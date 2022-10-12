
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
                                <p class="card-title-desc text-dark mb-2 py-4 rounded" style="background-color: #d6dbf8">

                                    <span class="font-size-20 font-weight-bold ml-3">Datewise Report for the Selected Dates</span>
                                </p>

                                @if (isset($users))
                                <div class="table-responsive">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100 table-sm text-center table-sm">
                                        <thead>
                                            <tr class="text-center">
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Parcel ID</th>
                                                <th>Tracking<br>ID</th>
                                                <th>Receivable <br>Charges</th>
                                                <th>Payable<br>Charges</th>
                                                <th>Difference</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @if ($users->count() > 0)
    
                                            @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    @php
                                                    $month = date('d/m/Y', strtotime($item->created_at));
                                                    // dd($month);
                                                    echo $month;
                                                    @endphp
                                                </td>
                                                <td>
                                                    <a href="{{ url('parcel-details/' . $item->id) }}" class="btn btn-outline-secondary btn-sm delete" title="View">
                                                        <i class="far fa-eye"> {{ $item->pl_id }}</i>
                                                    </a>
                                                </td>
    
    
                                                <td>{{ $item->parcel_tracking->vendor_tracking_id}} </td>
                                                <td>{{ $a = $item->pl_final }}</td>
                                                <td>{{ $b =$item->parcel_charges->vendor_tracking_charges}} </td>
                                                <td>{{$a-$b}}</td>
    
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td><code>No record found...</code></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                @endif

                                </tbody>
                                </table>

                                <!-- Back & Dashboard btns -->
                                <div class="d-flex justify-content-between my-2">
                                    <a href="{{ route('home') }}" class="btn btn-primary btn-md text-white"> &#60; Back</a>
                                    <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white">Dashboard </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
