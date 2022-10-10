<div class="modal fade " id="parcelmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Parcel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 0px;">
                <!-- This script got from frontendfreecode.com -->
                <div class="container">
                    <!-- <header>Signup Form</header> -->
                    <!-- <div class="progress-bar">
                        <div class="step">
                        <p>Name</p>
                        <div class="bullet">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                        <p>Contact</p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                        <p>Birth</p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                        <p>Submit</p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check"></div>
                        </div>
                    </div> -->
                    <div class="form-outer">
                        <form method="POST" action="{{ route('store-parcel') }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="page slide-page pb-0">
                                <div class="title ">Parcel Details:</div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">No of Boxes</label>
                                            <input type="number" class="form-control @error('pl_boxes') is-invalid @enderror" id="pl_boxes" name="pl_boxes" min="0" value="{{ old('pl_boxes') }}" required autofocus>

                                            @error('pl_boxes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Weight in <span class="text-danger text-ecnter">KG</span></label>
                                            <input type="number" class="form-control @error('pl_weight') is-invalid @enderror" id="pl_weight" name="pl_weight" min="0" value="{{ old('pl_weight') }}" required autofocus>

                                            @error('pl_weight')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Select Shipping Service</label>
                                            <select name="service_id" id="service_id" class="form-control @error('serrvice_id') is-invalid @enderror">
                                                <option value="">- Choose one Service -</option>
                                                @foreach ($services as $row)
                                                <option value="{{ $row->id }}"> {{ $row->service_name }}
                                                </option>
                                                @endforeach
                                            </select>

                                            @error('service_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Charges</label>
                                            <input type="number" class="form-control @error('pl_charges') is-invalid @enderror" id="pl_charges" name="pl_charges" min="0" value="{{ old('pl_charges') }}" required autofocus>

                                            @error('pl_charges')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Extras</label>
                                            <input type="number" class="form-control @error('pl_extras') is-invalid @enderror" id="pl_extras" name="pl_extras" min="0" value="{{ old('pl_extras') }}" required autofocus>

                                            @error('pl_extras')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Discount</label>
                                            <input type="number" class="form-control @error('pl_discount') is-invalid @enderror" id="pl_discount" name="pl_discount" min="0" value="{{ old('pl_discount') }}" required autofocus>

                                            @error('pl_discount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Final Charges</label>
                                            <input type="number" class="form-control @error('pl_final') is-invalid @enderror" id="pl_final" name="pl_final" min="0" value="{{ old('pl_final') }}" required autofocus readonly>

                                            @error('pl_final')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Select Payment Method</label>
                                            <select name="payment_method_id" id="payment_method_id" class="form-control @error('payment_method_id') is-invalid @enderror">
                                                <option value="">- Select Payment Method -</option>
                                                @foreach ($payment_methods as $row)
                                                <option value="{{ $row->id }}"> {{ $row->payment_method }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('payment_method_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="basicpill-namecard-input">Parcel Description</label>
                                            <textarea name="pl_description" id="pl_description" cols="1" rows="1" class="form-control @error('pl_description') is-invalid @enderror">
                                       </textarea>
                                            @error('pl_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <button class="firstNext next ">Next</button>
                                </div>
                            </div>

                            <div class="page pb-0">
                                <div class="title ">Dispatch Notes:</div>
                                <hr>
                                <div class="repeater">
                                    <div data-repeater-list="userData">
                                        <div data-repeater-item="">
                                            <div class="row">
                                                <div class="form-group col-4 col-sm-4  ">
                                                    <label for="name">Contents</label>
                                                    <input style="padding:6px 0px" type="text" id="disp_content" name="disp_content[]" class="form-control @error('disp_content') is-invalid @enderror">
                                                    @error('disp_content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                    <label for="message">Condition</label>
                                                    <select name="disp_condition[]" id="disp_condition" class="form-control @error('disp_condition') is-invalid @enderror">

                                                        <option value="new">New</option>
                                                        <option value="used">Used</option>

                                                    </select>
                                                    @error('disp_condition')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                    <label for="message">Currency</label>
                                                    <select name="disp_currency[]" id="disp_currency[]" class="form-control @error('company_currency') is-invalid @enderror">

                                                        <option value="0">PKR</option>
                                                        <option value="1">USD</option>
                                                        <option value="2">Euro</option>
                                                    </select>
                                                    @error('disp_currency')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                    <label for="resume">Price</label>
                                                    <input style="padding:6px 0px" type="number" id="disp_price" name="disp_price[]" min="0" class="form-control @error('disp_price') is-invalid @enderror" />
                                                    @error('disp_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                    <label for="subject">QTY</label>
                                                    <input style="padding:6px 0px" type="number" id="disp_quantity" name="disp_quantity[]" min="0" class="form-control @error('disp_quantity') is-invalid @enderror" />
                                                    @error('disp_quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col" style="margin:0 5px; padding:0px">
                                                    <label for="resume">Total</label>
                                                    <input style="padding:6px 0px" type="number" id="disp_total" name="disp_total[]" min="0" class="form-control @error('disp_total') is-invalid @enderror" />
                                                    @error('disp_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col mt-4">
                                                    <button style="margin-top: 7px;" type="button" class="btn btn-danger btn-md" data-repeater-delete="">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input data-repeater-create="" type="button" class="btn btn-success btn-sm" value="Add Notes"><br><br>
                                </div>

                                <div class="field btns">
                                    <button class="prev-1 prev">Previous</button>
                                    <button class="next-1 next">Next</button>
                                </div>
                            </div>

                            <div class="page pb-0">
                                <div class="title">Shipper Details:</div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="Tracking" class="form-label">Tracking ID</label>
                                        <input type="text" id="username9" required class="form-control @error('pl_id') is-invalid @enderror" name="pl_id" value="{{ $abc }}" autofocus readonly>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="Parcel1" class="form-label">Parcel Date</label>
                                        <input type="date" required id="pl_date" class="form-control @error('pl_date') is-invalid @enderror" name="pl_date" value="{{ old('pl_date') }}" required autofocus>

                                        @error('pl_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Search" class="form-label">Search Phone Number</label>
                                        <input class="form-control @error('pl_phone_id') is-invalid @enderror" id="pl_phone_id" placeholder="Type to search..." name="pl_phone_id">
                                        <table>
                                            <tbody id="content_manager">

                                            </tbody>
                                        </table>

                                        @error('pl_phone_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mt-4">
                                        <label for="chkPassport ">
                                            <input type="checkbox" id="chkPassport" />
                                            Add New Shipper
                                        </label>

                                    </div>
                                    <div id="dvAddShipper">
                                        <hr>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label for="username2" class="form-label">Company
                                                    Name</label>
                                                <input type="text" placeholder="Company Name" required class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                                                @error('company_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="service" class="form-label">Shipper Phone:</label>
                                                <input type="text" name="shipper_phone" data-inputmask="'mask': '0399-99999999'" type="number" maxlength="12" class="form-control @error('shipper_phone') is-invalid @enderror" name="company_phone" value="{{ old('shipper_phone') }}" required autocomplete="phone" autofocus>

                                                @error('shipper_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="basicpill-phoneno-input">Select Country:</label>
                                                <select class="form-control @error('shipper_country_id') is-invalid @enderror" name="shipper_country_id" id="shipper_country_id">
                                                    <option value=""> ------------- Select One Country
                                                        -------------
                                                    </option>
                                                    @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">
                                                        {{ $country->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('shipper_country_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="basicpill-phoneno-input">State/
                                                    Province /Region:</label>
                                                <input type="text" class="form-control @error('shipper_state') is-invalid @enderror" name="shipper_state" id="shipper_state">
                                                @error('shipper_state')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="basicpill-phoneno-input">City:</label>
                                                <input type="text" class="form-control @error('shipper_city') is-invalid @enderror" name="shipper_city" id="shipper_city">
                                                @error('shipper_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="basicpill-phoneno-input">ZIP:</label>
                                                <input type="text" class="form-control @error('shipper_zip') is-invalid @enderror" name="shipper_zip" id="shipper_zip">
                                                @error('shipper_zip')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="basicpill-phoneno-input">Address
                                                    Line1:</label>
                                                <input type="text" class="form-control @error('shipper_add1') is-invalid @enderror" name="shipper_add1" id="shipper_add1">
                                                @error('shipper_add1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="basicpill-phoneno-input">Address
                                                    Line2:</label>
                                                <input type="text" class="form-control @error('shipper_add2') is-invalid @enderror" name="shipper_add2" id="shipper_add2">
                                                @error('shipper_add2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="field btns">
                                    <button class="prev-2 prev">Previous</button>
                                    <button class="next-2 next">Next</button>
                                </div>
                            </div>

                            <div class="page">
                                <div class="title">Consignee Details:</div>
                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="username0" class="form-label">Consignee
                                            Name</label>
                                        <input type="text" placeholder="Receiver Name" required class="form-control @error('consignee_name') is-invalid @enderror" name="consignee_name" value="{{ old('consignee_name') }}" required autocomplete="name" autofocus>

                                        @error('consignee_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="username13" class="form-label">Receiver Phone
                                            Number</label>
                                        <input type="text" data-inputmask="'mask': '0399-99999999'" type="number" maxlength="12" class="form-control @error('consignee_phone') is-invalid @enderror" name="consignee_phone" value="{{ old('consignee_phone') }}" required autocomplete="consignee_phone" autofocus>

                                        @error('consignee_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mt-3 mb-2">
                                    <div class="col-md-6">
                                        <label for="chkCompany">
                                            <input type="checkbox" id="chkCompany" />
                                            Is it Business?
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="dvCompany" style="display: none">
                                            <input type="text" class="form-control @error('consignee_business') is-invalid @enderror" id="consignee_business" value="" name="consignee_business" placeholder="Business Title" />
                                            @error('consignee_business')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="basicpill-phoneno-input">Select Country:</label>
                                        <select class="form-control @error('consignee_country_id') is-invalid @enderror" name="consignee_country_id" id="consignee_country_id">
                                            <option value=""> ------------- Select One Country -------------
                                            </option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('consignee_country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="basicpill-phoneno-input">State/
                                            Province /Region:</label>
                                        <input type="text" class="form-control @error('consignee_state') is-invalid @enderror" name="consignee_state" id="consignee_region">
                                        @error('consignee_state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="basicpill-phoneno-input">City:</label>
                                        <input type="text" class="form-control @error('consignee_city') is-invalid @enderror" name="consignee_city" id="consignee_city">
                                        @error('consignee_city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="basicpill-phoneno-input">ZIP:</label>
                                        <input type="text" class="form-control @error('consignee_zip') is-invalid @enderror" name="consignee_zip" id="consignee_zip">
                                        @error('consignee_zip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="basicpill-phoneno-input">Address
                                            Line1:</label>
                                        <input type="text" class="form-control @error('consignee_add1') is-invalid @enderror" name="consignee_add1" id="consignee_add1">
                                        @error('consignee_add1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="basicpill-phoneno-input">Address
                                            Line2:</label>
                                        <input type="text" class="form-control @error('consignee_add2') is-invalid @enderror" name="consignee_add2" id="consignee_add2">
                                        @error('consignee_add2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3 mb-2">

                                </div>


                                <div class="field btns">
                                    <button class="prev-3 prev">Previous</button>
                                    <button class="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $(":input").inputmask();
        
        $(function() {
            $("#chkPassport").click(function() {

                if ($(this).is(":checked")) {

                    $("#pl_phone_id").val('');
                    $("#dvAddShipper").show();
                } else {
                    $("#dvAddShipper").hide();
                }
            });
        });

        $(function() {
            $("#chkCompany").click(function() {
                if ($(this).is(":checked")) {
                    $("#dvCompany").show();
                } else {
                    $("#consignee_business").val('');
                    $("#dvCompany").hide();
                }
            });
        });

        $(function() {
            $("#pl_discount").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed
            $("#pl_charges").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed
            $("#pl_extras").blur(function() {

                var pl_charges = parseInt($('#pl_charges').val());
                var pl_extras = parseInt($('#pl_extras').val());
                var pl_discount = parseInt($('#pl_discount').val());
                var pl_total = (pl_charges + pl_extras) - pl_discount;
                $('#pl_final').val(pl_total);

            }); // discount blur function closed
        });

        $('#pl_phone_id').on('blur', function() {

            $value = $(this).val();
            // alert($value);
            $.ajax({

                url: "{{ url('/search') }}",
                type: "GET",
                data: {
                    'search': $value
                },
                success: function(data) {

                    console.log(data);

                    $('#pl_phone_id').val(data.shipper_phone);

                }

            })

        });

        
    }); // ready function closed here
</script>
<script data-rishi-type="text/javascript">
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