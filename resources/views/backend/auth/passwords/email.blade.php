@extends('backend.layouts.auth')
@section('content')
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">{{ __('Reset Password') }}</h4>
						<hr>
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="Email" placeholder="{{ __('Email Address') }}">
                            @error('email')
                                <span class="text-left invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<button class="btn btn-block btn-primary mb-4">{{ __('Reset Password') }}</button>
						<hr>
						<p class="mb-0 text-muted">Do have an account? <a href="{{ route('login') }}" class="f-w-400">Signin</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection('content')