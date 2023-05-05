<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

    <!-- Stepper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.bundle.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Datatable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.bundle.css') }}">

    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    @stack('datatable-styles')

    <title>{{ (isset($pageTitle) ? __($pageTitle) : env('APP_NAME')) }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @yield('styles')

    @if (file_exists(public_path() . '/assets/css/app-custom.css'))
    <link href="{{ asset('assets/css/app-custom.css') }}" rel="stylesheet">
    @endif

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Aos -->
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Datatable JS -->
    <script src="{{ asset('assets/plugins/datatables/datatables.bundle.js') }}"></script>

    <!-- Stepper JS -->
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>


    <!-- Raphael JS -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Morris JS -->
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/chart.morris.js') }}"></script>


</head>


<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        {{-- include header --}}
        @include('sections.header')

        @yield('content')

        {{-- include footer --}}
        @include('sections.footer')

        @yield('scripts')
    </div>
</body>

</html>