@extends('layouts.app')

@section('content')
<!-- Page Content -->
<!--begin::Card-->
<div class="card">
    <!--begin::Card body-->
    <div class="card-body pt-6">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div>
                    <!-- Page Content -->
                    <div class="bg-pattern-style-register">
                        <div class="content">

                            <!-- Register Content -->
                            <div class="account-content">
                                <div class="account-box">
                                    <div class="login-right">
                                        <div class="login-header">
                                            <h3><span>Student</span> Registration</h3>
                                            <p class="text-muted">Please enter your Domicile, Category and NEET details to predict your chances of MBBS admission in NEET {{ date('Y') }}</p>
                                        </div>

                                        <!-- Register Form -->
                                        <form method="POST" action="{{ route('register.custom') }}">
                                            @csrf
                                            <div class="form-floating  mb-5">
                                                <input id="full_name" type="text" class="form-control" name="full_name" placeholder="Full Name" autofocus="" required value="{{ old('full_name') }}">
                                                <label for="full_name">Full Name *</label>
                                                @if ($errors->has('full_name'))
                                                <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-floating  mb-5">
                                                <input placeholder="Email ID" id="email" name="email" type="email" class="form-control" required value="{{ old('email') }}">
                                                <label for="email">Email ID *</label>
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-floating  mb-5">
                                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>
                                                <label for="password">Password *</label>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-floating  mb-5">
                                                <input placeholder="Mobile Number" id="mobile_no" type="text" maxlength="10" class="form-control" name="mobile_no" required value="{{ old('mobile_no') }}">
                                                <label for="mobile_no">Mobile Number *</label>
                                                @if ($errors->has('mobile_no'))
                                                <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-floating  mb-5">
                                                <div class="form-check form-check-xs custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user" required>
                                                    <label for="agree_checkbox_user" class="text-primary">Agree to Terms & Conditions</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary login-btn" type="submit">Create Account</button>
                                            <div class="account-footer text-center mt-3">
                                                Already have an account? <a class="forgot-link mb-0" href="{{route('login')}}">Login</a>
                                            </div>
                                        </form>
                                        <!-- /Register Form -->

                                    </div>
                                </div>
                            </div>
                            <!-- /Register Content -->

                        </div>

                    </div>
                    <!-- /Page Content -->
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--emd::Card-->

    </div>
</div>
    <!-- /Page Content -->
@endsection

@include('auth.terms_and_condition_modal')
@section('scripts')
<script>
    $(document).on('change', '#agree_checkbox_user', function() {
        if ($(this).prop('checked') == true) {
            $('#terms_and_condition').removeClass('d-none');
            $('#terms_and_condition').modal('show');
        } else {
            $('#terms_and_condition').addClass('d-none');
        }
    })
</script>
@endsection