<div class="modal fade " id="parcelmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Parcel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 0px;">
                <!-- This script got from frontendfreecode.com -->
                <div class="container"> 
                    
                    <form method="POST" action="{{ route('store-parcel') }}" enctype="multipart/form-data"
                        id="regForm">
                        @csrf
                        <h4 class="text-center text-info"> New Parcel Registration 
                            {{-- <p class="text-dark bold font-bold"><u>({{ $abc }})</u></p> --}}
                         </h4> <hr>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab"> <h5 class="text-danger">Parcel Details:</h5>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">No of Boxes</label>
                                        <input type="number"
                                            class="form-control @error('pl_boxes') is-invalid @enderror" id="pl_boxes"
                                            name="pl_boxes" min="0" value="{{ old('pl_boxes') }}" required
                                            autofocus>

                                        @error('pl_boxes')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Weight in <span
                                                class="text-danger text-ecnter">KG</span></label>
                                        <input type="number"
                                            class="form-control @error('pl_weight') is-invalid @enderror" id="pl_weight"
                                            name="pl_weight" min="0" value="{{ old('pl_weight') }}" required
                                            autofocus>

                                        @error('pl_weight')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Shipping Service</label>
                                        <select name="service_id" id="service_id"
                                            class="form-control @error('serrvice_id') is-invalid @enderror">
                                            <option value="">-Choose Service-</option>
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
                                        <input type="number"
                                            class="form-control @error('pl_charges') is-invalid @enderror"
                                            id="pl_charges" name="pl_charges" min="0"
                                            value="{{ old('pl_charges') }}" required autofocus>

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
                                        <input type="number"
                                            class="form-control @error('pl_extras') is-invalid @enderror" id="pl_extras"
                                            name="pl_extras" min="0" value="{{ old('pl_extras') }}" required
                                            autofocus>

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
                                        <input type="number"
                                            class="form-control @error('pl_discount') is-invalid @enderror"
                                            id="pl_discount" name="pl_discount" min="0"
                                            value="{{ old('pl_discount') }}" required autofocus>

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
                                        <input type="number"
                                            class="form-control @error('pl_final') is-invalid @enderror" id="pl_final"
                                            name="pl_final" min="0" value="{{ old('pl_final') }}" required
                                            autofocus readonly>

                                        @error('pl_final')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="basicpill-namecard-input">Description</label><br>
                                        <select class="js-example-basic-multiple form-control"  style="height:10%; width:100%;" name="pl_description[]" multiple="multiple">
                                          @foreach($contents as $content)
                                            <option value="{{$content->id}}">{{$content->name}}</option>
                                          @endforeach
                                          </select>
                                    </div>
                                </div>
                           

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="select2Multiple">Payment Method</label>
                                        <select name="payment_method_id" id="payment_method_id"
                                            class="form-control @error('payment_method_id') is-invalid @enderror">
                                            <option value="">-Select Method-</option>
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
                            </div>

                        </div>
                        <div class="tab">  <h5 class="text-danger">Dispatch Notes:</h5>
                            <hr>
                            <div class="repeater">
                                {{-- <div data-repeater-list="userData">
                                    <div data-repeater-item=""> --}}
                                        <div class="row">
                                            <div class="form-group col-4 col-sm-4  ">
                                                <label for="name">Contents</label>
                                                <input style="padding:6px 0px" type="text" id="disp_content"
                                                    name="disp_content[]"
                                                    class="form-control @error('disp_content') is-invalid @enderror">
                                                @error('disp_content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="message">Condition</label>
                                                <select name="disp_condition[]" id="disp_condition"
                                                    class="form-control @error('disp_condition') is-invalid @enderror">
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
                                                <select name="disp_currency[]" id="disp_currency[]"
                                                    class="form-control @error('disp_currency') is-invalid @enderror">
                                                   
                                                    @foreach ($currencies as $get_currency)
                                                        <option value="{{ $get_currency->id }}"> {{ $get_currency->name }}
                                                        </option>
                                                    @endforeach
                                                   
                                                </select>
                                                @error('disp_currency')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="resume">Price</label>
                                                <input style="padding:6px 0px" type="number" id="disp_price_0"  
                                                    data-flag ="0"
                                                    name="disp_price[]" min="0"
                                                    class="form-control 0 disp_price @error('disp_price') is-invalid @enderror" />
                                                @error('disp_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="subject">QTY</label>
                                                <input style="padding:6px 0px" type="number" id="disp_quantity_0"  
                                                    data-flag ="0"
                                                    name="disp_quantity[]" min="0"
                                                    class="form-control 0 disp_quantity @error('disp_quantity') is-invalid @enderror" />
                                                @error('disp_quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin:0 5px; padding:0px">
                                                <label for="resume">Total</label>
                                                <input style="padding:6px 0px" type="number" id="disp_total_0" 
                                                    data-flag ="0"
                                                    name="disp_total[]" min="0"
                                                    class="form-control  0 @error('disp_total') is-invalid @enderror" />
                                                @error('disp_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col mt-4">
                                                <button style="margin-top: 7px;" type="button"
                                                    class="btn btn-danger btn-md delete-btn"
                                                    >Delete</button>
                                            </div>
                                        </div>
                                    {{-- </div>
                                </div> --}}
                                
                            </div><br>
                            <input data-repeater-create="" type="button" class="btn btn-success btn-sm add-more-btn"
                                    value="Add Notes"><br><br>
                        </div>

                        <div class="tab"><h5 class="text-danger">Shipper Details:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="Tracking" class="form-label">Tracking ID</label>
                                    <input type="text" id="username9" required
                                        class="form-control @error('parcel_id') is-invalid @enderror" name="parcel_id"
                                        value="{{ $abc }}" autofocus readonly>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="Parcel1" class="form-label">Parcel Date</label>
                                    <input type="date" required id="pl_date"
                                        class="form-control @error('pl_date') is-invalid @enderror" name="pl_date"
                                        value="{{ old('pl_date') }}" required autofocus>

                                    @error('pl_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                    <label for="Search" class="form-label">Select Existing Customer </label>
                                    <select name="shipper_id" id="shipper_id" class="form-control">
                                        <option value=""> -Select One Customer- </option>
                                        @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->company_name}}</option>
                                        @endforeach
                                    </select>
                                </div> 

                                <div class="col-md-6 mt-4">
                                    <label for="chkPassport ">
                                        <input type="checkbox" id="chkPassport" />
                                        Add New Shipper
                                    </label>

                                </div> 
                            </div>
                                <div id="dvAddShipper">
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-6 mb-2">
                                            <label for="username2" class="form-label">Company
                                                Name</label>
                                            <input type="text" placeholder="Company Name" required
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                name="company_name" value="{{ old('company_name') }}" required
                                                autocomplete="company_name" autofocus>

                                            @error('company_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="service" class="form-label">Shipper Phone:</label>
                                            <input type="text" name="shipper_phone"
                                                data-inputmask="'mask': '0999-9999999999'" type="number"
                                                maxlength="15"
                                                class="form-control @error('shipper_phone') is-invalid @enderror"
                                                name="company_phone" value="{{ old('shipper_phone') }}" required
                                                autocomplete="phone" autofocus>

                                            @error('shipper_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <label for="basicpill-phoneno-input">Select Country:</label>
                                            <select
                                                class="form-control @error('shipper_country_id') is-invalid @enderror"
                                                name="shipper_country_id" id="shipper_country_id">
                                                <option value=""> -Select One Country- </option>
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
                                            <input type="text"
                                                class="form-control @error('shipper_state') is-invalid @enderror"
                                                name="shipper_state" id="shipper_state">
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
                                            <input type="text"
                                                class="form-control @error('shipper_city') is-invalid @enderror"
                                                name="shipper_city" id="shipper_city">
                                            @error('shipper_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="basicpill-phoneno-input">ZIP:</label>
                                            <input type="text"
                                                class="form-control @error('shipper_zip') is-invalid @enderror"
                                                name="shipper_zip" id="shipper_zip">
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
                                            <input type="text"
                                                class="form-control @error('shipper_add1') is-invalid @enderror"
                                                name="shipper_add1" id="shipper_add1">
                                            @error('shipper_add1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="basicpill-phoneno-input">Address
                                                Line2:</label>
                                            <input type="text"
                                                class="form-control @error('shipper_add2') is-invalid @enderror"
                                                name="shipper_add2" id="shipper_add2">
                                            @error('shipper_add2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div><br>
                                    </div>
                                </div>

                            <br><hr>
                        </div>

                        <div class="tab"><h5 class="text-danger">Consignee Details:</h5>
                            <hr>
                            <div class="row mt-3 mb-2">
                                <div class="col-md-12">
                                    <label for="onsignee_business">Consignee's Business Title </label>
                                        <input type="text"
                                            class="form-control @error('consignee_business') is-invalid @enderror"
                                            id="consignee_business" value="" name="consignee_business"
                                            placeholder="Business Title" />
                                        @error('consignee_business')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                {{-- <div class="col-md-6">
                                    <label for="chkCompany">
                                        <input type="checkbox" id="chkCompany" />
                                       Business Ti
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <div id="dvCompany" style="display: none">
                                        <label for="onsignee_business">Consignee's Business Title </label>
                                        <input type="text"
                                            class="form-control @error('consignee_business') is-invalid @enderror"
                                            id="consignee_business" value="" name="consignee_business"
                                            placeholder="Business Title" />
                                        @error('consignee_business')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="username0" class="form-label">Consignee
                                        Name</label>
                                    <input type="text" placeholder="Receiver Name" required
                                        class="form-control @error('consignee_name') is-invalid @enderror"
                                        name="consignee_name" value="{{ old('consignee_name') }}" required
                                        autocomplete="name" autofocus>

                                    @error('consignee_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="username13" class="form-label">Receiver Phone
                                        Number</label>
                                    <input type="text"  data-inputmask="'mask': '0999-9999999999'" type="number"
                                    maxlength="15"
                                        class="form-control @error('consignee_phone') is-invalid @enderror"
                                        name="consignee_phone" value="{{ old('consignee_phone') }}" required
                                        autocomplete="consignee_phone" autofocus>

                                    @error('consignee_phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                         
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="basicpill-phoneno-input">Select Country:</label>
                                    <select class="form-control @error('consignee_country_id') is-invalid @enderror"
                                        name="consignee_country_id" id="consignee_country_id">
                                        <option value=""> ---Select One Country--- </option>
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
                                    <input type="text"
                                        class="form-control @error('consignee_state') is-invalid @enderror"
                                        name="consignee_state" id="consignee_region">
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
                                    <input type="text"
                                        class="form-control @error('consignee_city') is-invalid @enderror"
                                        name="consignee_city" id="consignee_city">
                                    @error('consignee_city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">ZIP:</label>
                                    <input type="text"
                                        class="form-control @error('consignee_zip') is-invalid @enderror"
                                        name="consignee_zip" id="consignee_zip">
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
                                    <input type="text"
                                        class="form-control @error('consignee_add1') is-invalid @enderror"
                                        name="consignee_add1" id="consignee_add1">
                                    @error('consignee_add1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="basicpill-phoneno-input">Address
                                        Line2:</label>
                                    <input type="text"
                                        class="form-control @error('consignee_add2') is-invalid @enderror"
                                        name="consignee_add2" id="consignee_add2">
                                    @error('consignee_add2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br><hr>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js" data-cfasync="false" data-no-optimize="1" data-no-defer="1" data-no-minify="1"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<script>
    $(document).ready(function() {

        // $(":input").inputmask();
        $("#dvAddShipper").hide();
        $(function() {

            $("#chkPassport").click(function() {

                if ($(this).is(":checked")) {

                    $("#shipper_id").val('');
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

        //repeater data calculations
        $(function() {
            
            $("#disp_price").blur(function() {
                // alert(1);
                var disp_price = parseInt($(this).val());
                var disp_quantity = parseInt($('#disp_quantity').val());
                // var pl_discount = parseInt($('#pl_discount').val());
                var disp_total = (disp_price*disp_quantity);
                $('#disp_total').val(disp_total);

            }); // discount blur function closed
            $("#disp_quantity").blur(function() {
             
                var disp_price = parseInt($('#disp_price').val());
                var disp_quantity = parseInt($('#disp_quantity').val());
                // var pl_discount = parseInt($('#pl_discount').val());
                var disp_total = (disp_price*disp_quantity);
                $('#disp_total').val(disp_total);

            });
            $("#disp_total").blur(function() {
             
                var disp_price = parseInt($('#disp_price').val());
                var disp_quantity = parseInt($('#disp_quantity').val());
                // var pl_discount = parseInt($('#pl_discount').val());
                var disp_total = (disp_price*disp_quantity);
                $('#disp_total').val(disp_total);

            });
            
        });

    }); // ready function closed here
    $('body').on('click',function(){

    })
</script>
<script 
{{-- data-rishi-type="text/javascript"
 data-cfasync="false"
  data-no-optimize="1"
   data-no-defer="1"
    data-no-minify="1" --}}
    >
    $(document).ready(function() {
        // initEmpty: false,
        // $('.repeater').repeater({
        //     show: function() {
        //         $(this).slideDown();
        //     },
        //     hide: function(deleteElement) {
        //         if (confirm('Are you sure you want to delete this element?')) {
        //             $(this).slideUp(deleteElement);
        //         }
        //     },
        // });
    });
    //form-wizard
    increment = 0;
    flag = 0;
    $('body').on('click','.add-more-btn',function(){
        flag++;
        var clonHtml = `<div class="row">
                                            <div class="form-group col-4 col-sm-4  ">
                                                <label for="name">Contents</label>
                                                <input style="padding:6px 0px" type="text" id="disp_content"
                                                    name="disp_content[]"
                                                    class="form-control @error('disp_content') is-invalid @enderror">
                                                @error('disp_content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="message">Condition</label>
                                                <select name="disp_condition[]" id="disp_condition"
                                                    class="form-control @error('disp_condition') is-invalid @enderror">
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
                                                <select name="disp_currency[]" id="disp_currency[]"
                                                    class="form-control @error('company_currency') is-invalid @enderror">

                                                    <option value="1">PKR</option>
                                                    <option value="2">USD</option>
                                                    <option value="3">Euro</option>
                                                </select>
                                                @error('disp_currency')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="resume">Price</label>
                                                <input style="padding:6px 0px" type="number" id="disp_price_`+flag+`" data-flag="`+flag+`"
                                                    name="disp_price[]" min="0"
                                                    class="form-control disp_price  `+flag+` @error('disp_price') is-invalid @enderror" />
                                                @error('disp_price')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin: 0 5px; padding:0px">
                                                <label for="subject">QTY</label>
                                                <input style="padding:6px 0px" type="number" id="disp_quantity_`+flag+`" data-flag="`+flag+`"
                                                    name="disp_quantity[]" min="0"
                                                    class="form-control  disp_quantity `+flag+` @error('disp_quantity') is-invalid @enderror" />
                                                @error('disp_quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col" style="margin:0 5px; padding:0px">
                                                <label for="resume">Total</label>
                                                <input style="padding:6px 0px" type="number" id="disp_total_`+flag+`" data-flag="`+flag+`"
                                                    name="disp_total[]" min="0"
                                                    class="form-control   `+flag+` @error('disp_total') is-invalid @enderror" />
                                                @error('disp_total')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col mt-4">
                                                <button style="margin-top: 7px;" type="button"
                                                    class="btn btn-danger delete-btn btn-md">Delete</button>
                                            </div>
                                        </div>`;
        $('.repeater').append(clonHtml);
        increment++;
       
    });
    $('body').on('click','.delete-btn',function(){
        // alert(increment); return false;
        if(increment == 0){
             alert('cannot deleted');
             return false;
        }
        $(this).parent().parent().remove();
        increment--;
    });

    $('body').on('blur','.disp_quantity',function(){
        var flagClass = $(this).data('flag');
        var disp_price = $('#disp_price_'+flag).val();
        var disp_quantity = $('#disp_quantity_'+flag).val();
        var disp_total = (disp_price*disp_quantity);
        $('#disp_total_'+flag).val(disp_total);
    });

    
</script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>