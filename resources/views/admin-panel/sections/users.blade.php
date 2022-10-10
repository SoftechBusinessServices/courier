<div class="modal fade" id="usermodal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d6dbf8">
                <h5 class="modal-title">User Registration Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userform" class="needs-validation" novalidate method="POST" action="{{ route('store-user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username4" class="form-label">Username</label>
                        <input type="text" placeholder="Enter username" required class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="useremail1" class="form-label">Email</label>
                        <input type="email" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="userpassword" class="form-label">{{ __('Password') }}</label>
                        <div class="input-group auth-pass-inputgroup">
                            <input type="password" id="userpassword" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Enter password" value="{{ old('password') }}" required>
                            <!-- {{-- <button class="btn btn-light " type="button" id="password-addon"><i
                                    class="mdi mdi-eye-outline" onclick="togglePassword"></i></button> --}} -->



                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="show-hode-password d-flex float-right"> <input type="checkbox" class="btn btn-light  " onclick="togglePassword()">Show Password
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="userpassword" for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control @error('company_phone') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" value="{{ old('password_confirmation') }}">

                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <!-- Toogle to second dialog -->
                        <button type="submit" form="userform" class="btn btn-primary " id="modal_submit" value="Submit">Submit</button>
                        <button type="button" class="btn btn-secondary" id="modal_close1" data-bs-dismiss="modal">Close</button>
                    </div>
            </div>
            </form>

        </div>
    </div>
</div>