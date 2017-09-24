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
<div class="header">
    <div class="container">
        <div class="header_wrapper">
            <a class="logo" href="index.html"><img src="{{ asset('master/images/oilq_logo.png') }}"></a>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown"><a href="about.html">Pages <span class="arrow"></span></a>
                    <ul class="drop_items">
                        <li><a href="about.html">about us</a></li>
                        <li><a href="academy.html">oilq8 academy</a></li>
                        <li><a href="contact.html">contact us</a></li>
                    </ul><!-- End drop_items -->

                </li>
                <li class="dropdown"><a href="services.html">Services <span class="arrow"></a>
                    <ul class="drop_items">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="store.html">OILQ8 Store</a></li>
                    </ul><!-- End drop_items -->

                </li>
                <li><a href="events.html">Events & Exhibitions</a></li>
                <li class="dropdown"><a href="companies_guide.html">Advertisement <span class="arrow"></a>
                    <ul class="drop_items">
                        <li><a  href="companies_guide.html">Companies Guide</a></li>
                        <li><a href="tenders.html">Tenders</a></li>
                        <li><a href="oil_jobs.html">Oil Jobs</a></li>
                    </ul><!-- End drop_items -->

                </li>
                <li class="dropdown"><a href="image_gallery.html">Media <span class="arrow"></a>
                    <ul class="drop_items">
                        <li><a href="image_gallery.html">Image Gallery</a></li>
                        <li><a href="video_gallery.html">Video Gallery</a></li>
                        <li><a href="documents.html">Documents</a></li>
                    </ul><!-- End drop_items -->

                </li>
                <li><a href="sponsors.html">Sponsors</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="sign_in.html">Sign in/up</a></li>

                <li class="lang"><a id="ar_lang" href=""><img src="{{ asset('master/images/ar_flag.png') }}">العربية</a>
                    <a id="en_lang" class="hidden" href=""><img src="{{ asset('master/images/en_flag.png') }}">English</a>
                </li>
            </ul><!-- End menu -->
            <a href="" class="mob_menu hidden"><img src="images/mobile_menu.png"></a>
            <div class="clear"></div>
        </div><!-- End header wrapper -->
    </div><!-- End container -->
</div><!-- End header -->

@yield('content')

<footer class="purple_bg">
    <div class="container">
        <div class="col-half">
            <p>All Rights Reserved 2016 By oilq8<br>
                Designed & Developed by : Trans Gulf information technology</p>
        </div>
        <ul class="col-half social">
            <li><a href="www.facebook.com" class="facebook" target="_blank"></a></li>
            <li><a href="www.twitter.com" class="twitter" target="_blank"></a></li>
            <li><a href="www.google.com" class="google" target="_blank"></a></li>
            <li><a href="www.youtube.com" class="youtube" target="_blank"></a></li>

        </ul>
        <div class="clear"></div>
    </div><!-- End container -->
</footer>
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