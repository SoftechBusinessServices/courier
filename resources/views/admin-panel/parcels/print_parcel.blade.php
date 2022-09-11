
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <div class="card">
                            <div class="card-body">

                                
                                <p class="card-title-desc"><br>
                                    <!-- Button trigger modal -->
                                    <button type="button"
                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        New Parcel
                                    </button>
                                </p>
                                @if (isset($data))
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Parcel_id</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Currency</th>
                                                <th>Weight</th>
                                                <th>Chargeable</th>
                                                <th>Cost</th>
                                                <th>Extras</th>
                                                <th>Discount</th>
                                                <th>Final</th>
                                                <th>Delivery</th>
                                                <th>Description</th>
                                                <th>Parcel Date</th>
                                                <th>Status</th>
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
                                                    <tr>
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
                                                        <td>
                                                            @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                        </td>
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


      