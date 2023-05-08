<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | Atmia Education </title>
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="KeyTech.dev" />
    @php
    $logo = App\Models\Setting::where('key','favicon')->first();
    @endphp
    <link rel="icon" href="{{ $logo !='' ? 'data:image/png;base64,'.$logo->value : asset('assets/images/favicon.ico') }}" type="image/x-icon">
    @include('backend._inc._styles')
    @yield('page_css')
    <style> 
        .dt-responsive.table-responsive {
            overflow-x:scroll;
        }
    </style>
</head>
<div class="container-scroller">
    @include('backend._inc._header')
    <div class="container-fluid page-body-wrapper">
    @include('backend._inc._sidebar')
    @yield('content')
    @include('backend._inc._scripts')
    @yield('page_js')
    </div>
</body>
</html>