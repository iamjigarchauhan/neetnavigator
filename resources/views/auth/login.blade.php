@extends('layouts.app')
@section('content')
<!-- <section id="yl-popular-course" class="yl-popular-course-section">
    <div class="container">
    </div>
</section> -->
<section id="yl-popular-course" class="yl-popular-course-section">
    <div class="container">
        <div class="card_container">
            <div class="white_card">
                <div class="yl-login-head text-center pera-content">
                    <h2>Login</h2>
                </div>
                <div class="yl-login-content pera-content text-center pt-3">
                    @if(session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops!</strong> {{ session()->get('error') }}.
                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <input type="text" name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="text" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="yl-login-label clearfix">
                            {{-- <span><input type="checkbox">Remember me</span> --}}
                            {{-- <a href="{{ route('') }}">Forget Password?</a> --}}
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                    <p>Don’t have any account? <a href="{{ route('register-user')}}">Signup</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('auth.terms_and_condition_modal')
@endsection
<!-- Page Content -->
<!--begin::Card-->
{{-- <div class="card">
    <!--begin::Card body-->
    <div class="card-body pt-6">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div>
                    <div class="content">

                        <!-- Login Tab Content -->
                        <div class="account-content">
                            <div class="account-box">
                                <div class="login-right">
                                    <div class="login-header">
                                        <h3><span>Student</span> Login</h3>
                                        <p class="text-muted">Please enter your Domicile, Category and NEET details to predict your chances of MBBS admission in NEET {{ date('Y') }}</p>
                                    </div>
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Oops!</strong> {{ session()->get('error') }}.
                                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <form method="POST" action="{{ route('login.custom') }}">
                                        @csrf
                                        <div class="form-floating mb-5">
                                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                            <label for="email">Email ID</label>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="pass-group form-floating">
                                                <input type="password" placeholder="Password" id="password" class="form-control pass-input" name="password" required>
                                                <!-- <span class="fas fa-eye toggle-password"></span> -->
                                                <label class="form-control-label">Password</label>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-floating  mb-5">
                                            <div class="form-check form-check-xs custom-checkbox">
                                                <input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user" required>
                                                <label for="agree_checkbox_user" class="text-primary">Agree to Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <!-- <div class="text-end">
                            <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
                        </div> -->
                                        <button class="btn btn-primary login-btn" type="submit">Login</button>
                                        <div class="text-center dont-have">Don’t have an account? <a href="{{route('register-user')}}">Register</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Login Tab Content -->

                    </div>
                </div>
            </div>
            <!--end::Card body-->
        </div>
        <!--emd::Card-->

    </div> --}}
    <!-- /Page Content -->
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