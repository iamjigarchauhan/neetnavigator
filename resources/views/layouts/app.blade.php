<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MBBS IN INDIA Consultants | Atmia Education</title>
<link rel="shortcut icon" href="//www.atmiaeducation.com/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="//www.atmiaeducation.com/images/favicon.ico" type="image/x-icon">
<!-- <title>{{ (isset($pageTitle) ? __($pageTitle) : env('APP_NAME')) }}</title> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('sections._styles')
<style>
.header-style-two .yl-main-navigation .dropdown:after {content: '';}
</style>
@yield('styles')
</head>
<body class="yl-home">
<div id="yl-preloader"></div>
<div class="up">
<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>
@include('sections.header')
@yield('content')
@include('sections.footer')
@include('sections._scripts')
@yield('scripts')
</body>
</html>