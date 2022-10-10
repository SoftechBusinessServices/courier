<div class="modal fade" id="payment_method_modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">Payments Methods</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="paymentform" class="needs-validation" novalidate method="POST" action="{{ route('store-payment-method') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username4" class="form-label">Add Payment method</label>
                        <input type="text" placeholder="Enter username" required class="form-control @error('payment_method') is-invalid @enderror" name="payment_method" value="{{ old('payment_method') }}" required autocomplete="payment_method" autofocus>

                        @error('payment_method')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="paymentform" class="btn btn-primary " id="modal_submit6" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close6" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>