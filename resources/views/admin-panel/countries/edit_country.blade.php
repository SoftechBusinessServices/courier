@extends('admin-panel.index')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <!--write your code here  -->
                        <form id="form1" novalidate method="POST" action="{{ url('update-country/' . $data->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="useremail" class="form-label">Choose Regions</label>
                                    <select class="form-select" name="region_id" required
                                        class="form-control table-responsive @error('region_id') is-invalid @enderror"
                                        value="{{ old('region_id') }}">
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}"
                                                {{ $region->id == $data->region_id ? 'selected' : '' }}>
                                                {{ $region->name }}
                                                {{-- -{{ $country->code }} --}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('region_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Country Name</label>
                                    <input type="text" id="username" placeholder="Enter country name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $data->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="username" class="form-label">Country Code</label>
                                    <input type="text" id="username" placeholder="Enter country code"
                                        class="form-control @error('code') is-invalid @enderror" name="code"
                                        value="{{ $data->code}}" required autocomplete="code" autofocus>

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Agree to terms and conditions
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
