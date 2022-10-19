{{-- <div class="page-content" style="padding:0;  padding-top:2%;"> --}}
    <div class="page-content px-5" style="padding:0; padding-top:88px;">
    <div class=" border bg-light">
        <div class="modal modal-alert position-static d-block  " tabindex="-1" role="dialog" id="modalChoice">
            <div class="modal-body  text-center">
                <a href="#" class="nav-link text-dark">
                    <img src="{{ asset('assets/images/setting.png') }}" alt="">

                    <h3 class="">Settings</h3>
                </a>
            </div>

            <div class="row gx-5 mb-2">

                <div class="col  ">
                    <div class="modal-content rounded-3 shadow">
                        <div class="modal-body  text-center">
                            <a href="#" class="nav-link text-dark">
                                <img src="{{ asset('assets/images/user.png') }}" alt="">

                                <h3 class="mb-0 mt-2">Users</h3>
                            </a>
                        </div>
                        <div class="modal-footer flex-nowrap p-0 justify-content-center">
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#usermodal">Add
                                </a>
                            <a class="btn btn-success btn-md text-white" href="{{ route('add-user') }}">
                                List
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
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#servicemodal">Add
                            </a>
                            <a class="btn btn-success btn-md text-white" href="{{ route('add-service') }}">
                                List
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
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#logisticmodal">Add
                            </a>
                            <a href="{{ route('add-logistic') }}" class="btn btn-success btn-md text-white ">List
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
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#regionmodal">Add
                            </a>
                            <a class="btn btn-success btn-md text-white" href="{{ route('add-region') }}">
                                List
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
                            <a class="btn btn-primary btn-md text-white " data-bs-toggle="modal"
                                data-bs-target="#payment_method_modal">Add
                            </a>
                            <a class="btn btn-success btn-md text-white " href="{{ route('add-payment-method') }}">
                                List
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


