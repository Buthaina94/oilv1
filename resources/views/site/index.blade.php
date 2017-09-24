@extends('layouts.master')

@section('content')

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

            fdgdfgdfgdfgdfgdfg
    dfg
    df
    g
    dfg
    
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
@endsection