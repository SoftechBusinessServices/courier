

<div class="modal fade" id="customer_payment_modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Vendor Payment Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <form action="{{ url('vendor-tracking') }}" method="POST" id="vendor-tracking-id"> -->
                <form method="POST" id="customer_payment_modal">
                    @csrf
                    <table class="table table-bordered w-100">
                        <tr>
                            <th>Select Customer</th>
                            <th>Select Payment Method</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="vendor_payment_name" id="vendor_payment_name" class="form-control">
                                    @foreach($vendors as $vendor)
                                    <option value="{{$vendor->id}}"> {{$vendor->logistic_name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="vendor_payment_method" id="vendor_payment_method" class="form-control">
                                    @foreach($payment_methods as $payment_method)
                                    <option value="{{$payment_method->id}}"> {{$payment_method->payment_method}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <th>Enter Amount</th>
                            <td>
                                <input type="text" name="vendor_payment_amount" value="" id="vendor_payment_amount" class="form-control">
                            </td>


                        </tr>
                        <br>
                    </table>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="vendor-tracking-id" class="btn btn-primary vendor-tracking-id" id="modal_submit5" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close5" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>
