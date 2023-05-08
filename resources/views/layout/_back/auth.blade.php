<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title') | Atmia Education</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="KeyTech.dev" />
	@php
	$logo = App\Models\Setting::where('key','favicon')->first();
	@endphp
	<link rel="icon" href="{{ $logo !='' ? 'data:image/png;base64,'.$logo->value : asset('assets/images/favicon.ico') }}" type="image/x-icon">
	@include('backend._inc._styles')
</head>
<body>
    @yield('content')
    @include('backend._inc._scripts')
</body>
</html>