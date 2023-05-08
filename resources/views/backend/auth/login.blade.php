@extends('backend.layouts.auth')
@section('title')
Login
@endsection
@section('content')
@php
$bgImage = App\Models\Setting::where('key','bg_image')->first();
$logo = App\Models\Setting::where('key','logo')->first();
@endphp
<div class="container-scroller"  {{ $bgImage !='' ? 'style=background-image:url("data:image/png;base64,'.$bgImage->value.'");':"style=background-color:#f7f7f7" }}>
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth px-0">
			<div class="row w-100 mx-0">
				<div class="col-lg-4 mx-auto">
					<div class="auth-form-light text-left py-5 px-4 px-sm-5">
						<div class="brand-logo">
							<img src="{{ $logo !='' ? 'data:image/png;base64,'.$logo->value : asset('assets/img/logo.png') }}" alt="logo">
						</div>
						{{-- <h4></h4> --}}
						<h6 class="font-weight-light">Sign in to continue.</h6>
						<form class="pt-3" method="POST" action="{{ url('admin/login') }}">
							@csrf
							<div class="form-group">
								<input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
									@error('email')
									<span class="text-left invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
									</span>
									@enderror	
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
									@error('password')
										<span class="text-left invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
										</span>
									@enderror	
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
@endsection