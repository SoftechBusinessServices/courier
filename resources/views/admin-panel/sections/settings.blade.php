<div class="page-content" style="padding:12;  padding-top:2%;">
    <div class="border bg-light m-4">
        <div class="modal modal-alert position-static d-block  " tabindex="-1" role="dialog" id="modalChoice">
            <div class="modal-body  text-center">
                <a href="#" class="nav-link text-dark">
                    <img src="{{ asset('assets/images/setting.png') }}" alt="">

                    <h3 class="">Settings</h3>
                </a>
            </div>

            <div class="row gx-5 mb-2 p-4">

                <div class="col  ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/user.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Users</h3>
                            </a>
                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10" data-bs-toggle="modal"
                                data-bs-target="#usermodal">Add User
                                </a>
                            <a class="btn btn-success btn-md text-white font-size-10" href="{{ route('add-user') }}">
                                Users List
                            </a>

                        </div>
                    </div>
                </div>
                {{-- <div class="col  ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/user.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Companies</h3>
                            </a>
                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#companymodal">Add
                            </a>
                            <a class="btn btn-success btn-md text-white" href="{{ route('add-company') }}">
                                List
                            </a>

                        </div>
                    </div>
                </div> --}}

                
                <div class="col  ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/parcel.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Contents</h3>
                            </a>
                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10" data-bs-toggle="modal"
                                data-bs-target="#contentmodal">Add Content
                                </a>
                            <a class="btn btn-success btn-md text-white font-size-10" href="{{ route('add-content') }}">
                                Contents List
                            </a>

                        </div>
                    </div>
                </div>

                <!--Services  -->
                <div class="col ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/services.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Services</h3>
                            </a>

                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10" data-bs-toggle="modal"
                                data-bs-target="#servicemodal">Add Service
                            </a>
                            <a class="btn btn-success btn-md text-white font-size-10" href="{{ route('add-service') }}">
                                Service List
                            </a>

                        </div>
                    </div>
                </div>
                <!-- Services closed -->

                <div class="col ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/vendor.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Vendors</h3>
                            </a>

                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10" data-bs-toggle="modal"
                                data-bs-target="#logisticmodal">Add Vendor
                            </a>
                            <a href="{{ route('add-logistic') }}" class="btn btn-success btn-md text-white font-size-10">Vendors List
                            </a>

                        </div>
                    </div>
                </div>
                <!-- customers closed -->


                <!-- Regions  -->
                <div class="col ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/region.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Regions</h3>
                            </a>

                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10 " data-bs-toggle="modal"
                                data-bs-target="#regionmodal">Add Region
                            </a>
                            <a class="btn btn-success btn-md text-white font-size-10" href="{{ route('add-region') }}">
                                Regions List
                            </a>

                        </div>
                    </div>
                </div>
                <!-- Regions closed -->

                <div class="col ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark px-0">
                                <img src="{{ asset('assets/images/payments.png') }}" alt="">

                                <h4 class="mb-0 mt-2"> Methods</h4>
                            </a>
                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white font-size-10" data-bs-toggle="modal"
                                data-bs-target="#payment_method_modal">Add Method
                            </a>
                            <a class="btn btn-success btn-md text-white font-size-10" href="{{ route('add-payment-method') }}">
                                Methods List
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


