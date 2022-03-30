<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--=============== basic  ===============-->

    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('theme/css/color.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}">
    @livewireStyles
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <svg>
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                        <fecomposite in="SourceGraphic" in2="gooey" operator="atop" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
    <!--loader end-->
    <!-- main -->
    <div id="main">
        @include('layouts.partials._header')
        <!-- wrapper  -->
        <div id="wrapper">
            {{ $slot }}
            @include('layouts.partials._footer')
        </div>
        <!-- wrapper end -->
        <!--register form -->
        @include('layouts.partials._auth-modal')
        <!--register form end -->
        <!--secondary-nav -->
        <div class="secondary-nav">
            <ul>
                <li><a href="dashboard-add-listing.html" class="tolt" data-microtip-position="left"
                        data-tooltip="Sell Property"><i class="fal fa-truck-couch"></i> </a></li>
                <li><a href="listing.html" class="tolt" data-microtip-position="left"
                        data-tooltip="Buy Property"> <i class="fal fa-shopping-bag"></i></a></li>
                <li><a href="compare.html" class="tolt" data-microtip-position="left"
                        data-tooltip="Your Compare"><i class="fal fa-exchange"></i></a></li>
            </ul>
            <div class="progress-indicator">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 -1 34 34">
                    <circle cx="16" cy="16" r="15.9155" class="progress-bar__background" />
                    <circle cx="16" cy="16" r="15.9155"
                        class="progress-bar__progress
                            js-progress-bar" />
                </svg>
            </div>
        </div>
        <!--secondary-nav end -->
        <a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>
        <!--map-modal -->
        <div class="map-modal-wrap">
            <div class="map-modal-wrap-overlay"></div>
            <div class="map-modal-item">
                <div class="map-modal-container fl-wrap">
                    <h3> <span>Listing Title </span></h3>
                    <div class="map-modal-close"><i class="far fa-times"></i></div>
                    <div class="map-modal fl-wrap">
                        <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        <div class="scrollContorl"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--map-modal end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/plugins.js') }}"></script>
    <script src="{{ asset('theme/js/scripts.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places">
    </script>
    <script src="{{ asset('theme/js/map-single.js') }}"></script>
    @livewireScripts

</body>


</html>
