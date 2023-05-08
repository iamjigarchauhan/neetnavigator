@extends('backend.layouts.auth')
@section('content')
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">{{ __('Sign up') }}</h4>
						<hr>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="Email" placeholder="Email address">
                            @error('email')
                                <span class="text-left invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="Password" placeholder="Password">
                            @error('password')
                                <span class="text-left invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<button class="btn btn-block btn-primary mb-4">{{ __('Sign up') }}</button>
						<hr>
						<p class="mb-0 text-muted">Do have an account? <a href="{{ route('login') }}" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection