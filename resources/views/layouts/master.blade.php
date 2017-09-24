<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--   Mobile Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#c82125">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#c82125">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#c82125">
    <title>OILQ8 | Home</title>
    <meta name="description" content="OILQ8">
    <meta name="keywords" content="OILQ8">
    <link rel="shortcut icon" href="{{ asset('master/images/oilq_tabicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,500,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('master/style/jquery.mCustomScrollbar.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('master/style/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('master/style/main.css') }}" type="text/css" id="en_style" />
    <!--   If page language needs a rtl styling, the load this file.-->
    <link rel="stylesheet" href="{{ asset('master/style/main-ar.css') }}" type="text/css" id="ar_style" disabled />
    <link rel="stylesheet" href="{{ asset('master/style/queries.css') }}" type="text/css" />

</head>
<body>


@yield('content')


<!-- Scripts -->
<script src="{{ asset('master/scripts/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD_PpSFy8WLjkGJK2qsxaShmPbyCq5tzhs"></script>
<script src="{{ asset('master/scripts/jquery.mCustomScrollbar.concat.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('master/scripts/swiper.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('master/scripts/script.js') }}" type="text/javascript"></script>
<!-- Load This file  only in the index page -->
<script src="{{ asset('master/scripts/scroll_effects.js') }}" type="text/javascript"></script>

</body>
</html>