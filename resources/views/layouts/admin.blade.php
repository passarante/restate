<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('theme/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('theme/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('theme/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('theme/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('theme/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('theme/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
        media="all">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css'
        integrity='sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=='
        crossorigin='anonymous' />
    <!-- Main CSS-->
    <link href="{{ asset('theme/admin/css/theme.css') }}" rel="stylesheet" media="all">
    @livewireStyles
    @stack('pageStyles')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        @include('layouts.partials.admin._sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('layouts.partials.admin._header')

            <!-- MAIN CONTENT-->
            {{ $slot }}
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('theme/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('theme/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('theme/admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('theme/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('theme/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('theme/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/admin/vendor/select2/select2.min.js') }}">
    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js'
        integrity='sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=='
        crossorigin='anonymous'></script>
    <!-- Main JS-->
    <script src="{{ asset('theme/admin/js/main.js') }}"></script>
    @livewireScripts

    <script>
        var successMessage = "{{ Session::get('successMessage') }}";
        var errorMessage = "{{ Session::get('errorMessage') }}";

        if (successMessage) {
            iziToast.success({
                title: 'Bilgi!...',
                message: successMessage,
            });
        }
        if (errorMessage) {
            iziToast.error({
                title: 'Hata!...',
                message: errorMessage,
            });
        }
        window.addEventListener('successMessage', event => {
            iziToast.success({
                title: 'Bilgi!...',
                message: event.detail.message,
            });
        })
        window.addEventListener('errorMessage', event => {
            iziToast.error({
                title: 'Hata!...',
                message: event.detail.message,
            });
        })
        window.addEventListener('delete-record', event => {
            iziToast.question({
                timeout: 20000,
                close: false,
                overlay: true,
                displayMode: 'once',
                id: 'question',
                zindex: 999,
                title: 'Hey',
                message: `<strong>${event.detail.name}</strong> kayd??n?? silmek istedi??nize emin misiniz?`,
                position: 'center',
                buttons: [
                    ['<button><b>S??L</b></button>', function(instance, toast) {

                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast, 'button');

                        window.livewire.emit('deleteRecord');

                    }, ],
                    ['<button>??PTAL</button>', function(instance, toast) {

                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast, 'button');

                    }, true],
                ],

            });
        })
    </script>
    @stack('pageScripts')



</body>

</html>
<!-- end document-->
