
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <div class="card">
                            <div class="card-body">

                                
                                <p class="card-title-desc">
                                  <h3 class="text-center">Parcel Details Print Preview</h3>
                                
                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons" style="border: 1px solid black;"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm border">
                                        <thead style=" border: 1px solid black;">
                                            <tr style=" border: 1px solid black;">
                                                <th style=" border: 1px solid black;">S.No</th>
                                                <th style=" border: 1px solid black;">Parcel_id</th>
                                                <th style=" border: 1px solid black;">Region</th>
                                                <th style=" border: 1px solid black;">Country</th>
                                                <th style=" border: 1px solid black;">Currency</th>
                                                <th style=" border: 1px solid black;">Weight</th>
                                                <th style=" border: 1px solid black;">Chargeable</th>
                                                <th style=" border: 1px solid black;">Cost</th>
                                                <th style=" border: 1px solid black;">Extras</th>
                                                <th style=" border: 1px solid black;">Discount</th>
                                                <th style=" border: 1px solid black;">Final</th>
                                                <th style=" border: 1px solid black;">Delivery</th>
                                                <th style=" border: 1px solid black;">Description</th>
                                                <th style=" border: 1px solid black;">Parcel Date</th>
                                                {{-- <th>Status</th> --}}
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @php
                                                $i = 1;
                                            @endphp
                                            @if ($data->count() > 0)
                                                @foreach ($data as $item)
                                                    {{-- @dd($item) --}}
                                                    <tr style=" border: 1px solid black;">
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $item->pl_id }}</td>
                                                        <td>{{ $item->region->name }}</td>
                                                        <td>{{ $item->country->name }}</td>
                                                        <td>{{ $item->currency->name }}</td>
                                                        <td>{{ $item->pl_weight }}</td>
                                                        <td>{{ $item->chargeable_weight }}</td>
                                                        {{-- <td>{{ $item->pl_currency }}</td> --}}
                                                        <td>{{ $item->pl_cost }}</td>
                                                        <td>{{ $item->pl_extras }}</td>
                                                        <td>{{ $item->pl_discount }}</td>
                                                        <td>{{ $item->pl_symbol . ' ' . $item->pl_final }}</td>

                                                        <td>{{ $item->pl_description }}</td>
                                                        <td>{{ $item->pl_status }}</td>
                                                        <td>
                                                            @php
                                                                $month = date('d/m/Y', strtotime($item->pl_date));
                                                                // dd($month);
                                                                echo $month;
                                                            @endphp
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
                                                        {{-- <td style="">
                                                            <a href="{{ url('print-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-dark btn-sm print" title="Print">
                                                                <i class="fas fa-regular fa-print"></i>
                                                            </a>

                                                            |<a href="{{ url('edit-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-warning btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            |
                                                            <a href="{{ url('delete-parcel/' . $item->id) }}"
                                                                class="btn btn-outline-danger btn-sm delete" title="Delete"
                                                                onclick="return confirm('Are you sure to delete Record?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td> --}}
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


      