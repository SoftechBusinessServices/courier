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
                                <p class="card-title-desc text-dark mb-2 py-4 rounded" style="background-color: #d6dbf8">

                                    <span class="font-size-20 font-weight-bold"> Countries under selected  <a href="#"> Region</a>

                                    </span>

                                </p>
                                @if (isset($data))
                                
                                <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100 table-sm table-responsive">

                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Region</th>
                                                <th>Country</th>
                                                <th>Date</th>
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
                                                        <td class="bg-secondary text-white">{{ $item->region->name }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        {{-- <td>{{ $item->code }}</td> --}}
                                                        <td>
                                                            @php
                                                            $date_formate = date('d/m/y', strtotime($item->created_at));
                                                            echo $date_formate;
                                                            @endphp
                                                        </td>
                                                        <td>
                                                            {{-- @if ($item->status == 'inactive')
                                                                <button type="button" class="btn btn-danger  btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm">
                                                                    {{ $item->status }} </button>
                                                            @endif
                                                            | --}}
                                                            <a href="{{ url('delete-country/' . $item->id) }}"
                                                                class="btn btn-outline-danger btn-sm delete" title="Delete"
                                                                onclick="return confirm('Are you sure to delete Record?')">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
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
                                <div class="justfy-content-between">
                                    <a href="{{ route('add-region') }}" class="btn btn-primary btn-md text-white">Back</a>
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

