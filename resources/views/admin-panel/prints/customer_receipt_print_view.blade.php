@extends('admin-panel.index')

@section('content')
<div class="">

    <div class="page-content px-0 " style=" padding:0px;padding-top:75px;">
        <div class="container p-0">
          
            <!-- start page title -->
            <div class="row ">
                <div class="col-12 ">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between p-1 px-3 text-bold">
                        {{-- <h4 class="mb-sm-0 font-size-18">Detail</h4>  --}}
                        <h4 class="float-end font-size-16"> Customer Receipt Print Preview </h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0 text-bold text-decoration-underline ">
                                <li class="breadcrumb-item">Tracking ID: {{$data->parcel_id}}</li>
                                <li class="breadcrumb-item  text-bold">Dated: {{ date('d,m,Y' ,strtotime($data->created_at)) }}</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body px-3 py-0">

                            <div class="invoice-title">
                                 <div class="mb-0">
                                    <div class="row">
                                        <div class="col p-2 text-center">
                                            <img src="{{asset('assets/images/LogoBFS.png')}}" alt="logo" height="60" covered />
                                        </div>
                                        <div class="col">
                                            <label for="">Best Freight System</label>
                                            <p>Email: Bestfreightsys@gmail.com</p>
                                            <label for="">Phone: (+92) 300 8631512</label>
                                        </div>
                                        <div class="col">
                                            <p>Address: Al Amin market Fateh Garh Road, Sialkot, Pakistan</p>
                                            <p>Website: <a href="http://imrans33.sg-host.com/"
                                                    target="_blank">http://imrans33.sg-host.com/</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="m-0 mb-2">
                            <div class="page-title-right">
                                <h3 class="m-2 font-size-22 fw-bold">Parcel Details </h3>

                                <ol class="breadcrumb m-0 text-bold text-decoration-underline">
                                    <li class="breadcrumb-item">Tracking ID: <span class="text-bold">{{$data->parcel_id}}</span></li>
                                    <li class="breadcrumb-item  text-bold">Service Used: <span class="text-bold text-primary">{{ $data->parcel_with_service->service_name  }}</span></li>
                                    <li class="breadcrumb-item  text-bold">Destination: <span class=" text-bold text-primary">{{  $data->parcel_with_consignee->consignee_with_country->name }}</span></li>
                                    <li class="breadcrumb-item  text-bold">Status: <span class="text-bold text-danger">{{ $data->pl_status }}</span></li>
                                    <li class="breadcrumb-item  text-bold">Dated: <span class="text-bold">{{ date('d,m,Y' ,strtotime($data->created_at)) }}</span></li>
                                </ol>
                            </div>
                            <div class=" ">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm table-responsive-sm">
                                        <tbody>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">No of Boxes</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Weight</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Total Charges</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Payment Method</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_boxes}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_weight}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_final}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_payment->payment_method}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Charges</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Extras</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Discounts</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Description</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_charges}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_extras}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->pl_discount}}</td>
                                                <td class="py-1 px-0 font-size-14">
                                                    {{$pl_description}}
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <hr class="m-0 mb-2">
                            <div class="">
                                <h3 class="m-2 font-size-22 fw-bold">Dispatch Notes</h3>
                            </div>
                            <div class=" ">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm table-bordered  table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Content</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Condition</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Currency</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Price</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Quantity</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            {{-- @dd($data->parcel_with_notes); --}}
                                            @if( $data->parcel_with_notes->count() >0)
                                            @foreach($data->parcel_with_notes as $item)
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$item->disp_content}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$item->disp_condition}}</td>
                                                <td class="py-1 px-0 font-size-14">{{ $item->notes_with_currency->name }}</td>
                                                <td class="py-1 px-0 font-size-14">{{$item->disp_price}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$item->disp_quantity}}</td>  
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td class="text-danger">No Record found!</td>
                                            </tr>
                                            @endif
                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            <hr class="m-0 mb-1">
                            <div class="">
                                <h3 class="m-2 font-size-22 fw-bold">Consignee Details</h3>
                                <!-- {{$data->consignee}} -->
                            </div>
                            <div class=" ">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <tbody>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Receiver Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Number</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Business Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Country</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_name}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_phone}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_business}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_with_country->name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">State</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">City</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_state}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_city}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_state}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_state}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line1</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line2</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_address1}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_consignee->consignee_address2}}</td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <hr class="m-0 mb-1">
                            <div class="">
                                <h3 class="m-2 font-size-22 fw-bold">Shipper Details</h3>
                                <!-- {{$data->shipper}} -->
                            </div>
                            <div class=" ">
                                <div class="table-responsive">
                                    <table class="table table-nowrap table-sm  table-responsive-sm">
                                        <tbody>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Receiver Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Number</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Business Name</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Country</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->company_name}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_phone}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->company_name}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_with_country->name}}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">State</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">City</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Zip Code</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_state}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_city}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_zip}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_zip}}</td>
                                               
                                                
                                            </tr>
                                            <tr>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line1</th>
                                                <th class="py-1 px-0 font-size-14" scope="col">Address Line2</th>
                                            </tr>
                                            <tr>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_address1}}</td>
                                                <td class="py-1 px-0 font-size-14">{{$data->parcel_with_shipper->shipper_address2}}</td>
                                                
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="d-print-none">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between"> <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white btn-sm m-2 px-2">Back </a>
                                        <a href="{{ route('home') }}" class="btn btn-dark btn-md text-white btn-sm m-2 px-2">Dashboard </a>
                                    </div>
                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light  mr-4 pt-2 pb-0 px-3"><i class="fa fa-print"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

   
    @endsection