<div class="page-content px-5" style="padding:0; padding-top:88px;">
    <div class="page-title-box d-sm-flex  justify-content-left  ">
        <h4 class="mb-sm-0 font-size-18"><a href="{{ route('home') }}">Dashboard</a></h4>
    </div>

    <!-- fist container  -->
    <div class="row gx-5 mb-2">
        <!-- Parcel  -->
        <div class=" col-12 col-md-6 col-lg-3 col-sm-6 ">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body py-4 px-0 text-center">
                        <a href="#" class="nav-link text-dark px-0">
                            <img src="{{ asset('assets/images/parcel-new.png') }}" alt="">

                            <h3 class="mb-0 mt-2">New Parcels</h3>
                        </a>

                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center">
                        <a class="btn btn-primary btn-md text-white waves-effect waves-light " data-bs-toggle="modal" data-bs-target="#parcelmodal">Add
                            Parcel </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Processed -->
        <div class=" col-12 col-md-6 col-lg-3 col-sm-6">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body py-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/parcel-processed.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Processed</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center d-flex flex-direction-column">
                        <!-- add customer  -->
                        <a class="btn btn-primary" data-toggle="collapse" href="#processtable" data-target="#processtable" role="button" aria-expanded="false" aria-controls="collapseExample">Processed
                            Parcels</a>

                    </div>
                </div>
            </div>
        </div>

        <!-- Allocated -->
        <div class=" col-12 col-md-6 col-lg-3 col-sm-6">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body py-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/allocated.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Allocated</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center d-flex flex-direction-column">
                        <!-- add customer  -->
                        <a class="btn btn-primary" data-toggle="collapse" href="#allocatetable" role="button" aria-expanded="false" aria-controls="collapseExample">Allocated
                            Parcels</a>


                    </div>
                </div>
            </div>

        </div>
        <!-- Payments -->
        <div class=" col-12 col-md-6 col-lg-3 col-sm-6">
            <div class="p-3 border bg-light">
                <div class="modal-content rounded-3 shadow">
                    <div class="modal-body py-4 text-center">
                        <a href="#" class="nav-link text-dark">
                            <img src="{{ asset('assets/images/payments.png') }}" alt="">

                            <h3 class="mb-0 mt-2">Payments</h3>
                        </a>
                    </div>
                    <div class="modal-footer flex-nowrap p-0 justify-content-center">

                        <a class="btn btn-primary btn-md text-white font-size-12 " data-toggle="collapse" href="#balancesheettable" role="button" aria-expanded="false" aria-controls="collapseExample">Balance Sheet</a>
                        <a class="btn btn-info btn-md text-white font-size-12 " data-toggle="collapse" href="#vendortable" role="button" aria-expanded="false" aria-controls="collapseExample">Vendor Payment</a>
                        <a class="btn btn-success btn-md text-white font-size-12 " data-toggle="collapse" href="#customertable" role="button" aria-expanded="false" aria-controls="collapseExample">Customer Payment</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row1 closed -->


    @include('admin-panel.sections.processed_parcel')



    @include('admin-panel.sections.allocated_parcel')
    <!-- Setting container -->

    @include('admin-panel.sections.vendor_payment')

    @include('admin-panel.sections.settings')

</div>


<!------------------Vendor Charges Update ---------------------->


<!------------------vendor_payment_modal---------------------->


<!------------------customer_payment_modal---------------------->
@include('admin-panel.sections.customer_payment')


<!------------------Payment Modal---------------------->
@include('admin-panel.sections.payment_methods')

<!------------------User Modal---------------------->
@include('admin-panel.sections.users')


<!------------------Parcel Modal---------------------->

@include('admin-panel.sections.add_parcel')
</div>

<!---------------------- JAVASCRIPT-------------------->

<script>
    $(document).ready(function() {

        $(":input").inputmask();

        function togglePassword() {
            var x = document.getElementById("userpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    }); // ready function closed here
</script>
<script data-rishi-type="text/javascript" data-cfasync="false" data-no-optimize="1" data-no-defer="1" data-no-minify="1">
    $(document).ready(function() {

        $('.repeater').repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
        });
    });
    //form-wizard
</script>

