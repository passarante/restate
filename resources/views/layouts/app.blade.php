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
        <div class="main-register-wrap modal">
            <div class="reg-overlay"></div>
            <div class="main-register-holder tabs-act">
                <div class="main-register-wrapper modal_main fl-wrap">
                    <div class="main-register-header color-bg">
                        <div class="main-register-logo fl-wrap">
                            <img src="{{ asset('theme/images/white-logo.png') }}" alt="">
                        </div>
                        <div class="main-register-bg">
                            <div class="mrb_pin"></div>
                            <div class="mrb_pin mrb_pin2"></div>
                        </div>
                        <div class="mrb_dec"></div>
                        <div class="mrb_dec mrb_dec2"></div>
                    </div>
                    <div class="main-register">
                        <div class="close-reg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a>
                            </li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address * <span class="dec-icon"><i
                                                        class="fal fa-user"></i></span></label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <div class="pass-input-wrap fl-wrap">
                                                <label>Password * <span class="dec-icon"><i
                                                            class="fal fa-key"></i></span></label>
                                                <input name="password" type="password" autocomplete="off"
                                                    onClick="this.select()" value="">
                                                <span class="eye"><i class="fal fa-eye"></i> </span>
                                            </div>
                                            <div class="lost_password">
                                                <a href="#">Lost Your Password?</a>
                                            </div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="check">
                                                <label for="check-a3">Remember me</label>
                                            </div>
                                            <div class="clearfix"></div>
                                            <button type="submit" class="log_btn color-bg"> LogIn </button>
                                        </form>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form"
                                                id="main-register-form2">
                                                <label>Full Name * <span class="dec-icon"><i
                                                            class="fal fa-user"></i></span></label>
                                                <input name="name" type="text" onClick="this.select()" value="">
                                                <label>Email Address * <span class="dec-icon"><i
                                                            class="fal fa-envelope"></i></span></label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <div class="pass-input-wrap fl-wrap">
                                                    <label>Password * <span class="dec-icon"><i
                                                                class="fal fa-key"></i></span></label>
                                                    <input name="password" type="password" autocomplete="off"
                                                        onClick="this.select()" value="">
                                                    <span class="eye"><i class="fal fa-eye"></i>
                                                    </span>
                                                </div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a>
                                                        and <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log_btn color-bg"> Register </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"> Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
