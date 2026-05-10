<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title', 'Pureexa health & beauty')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- FONT AWESOME 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loader.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('assets/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/switcher.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    @stack('styles')

</head>

<body id="bg">

    <div class="page-wraper">

        <div id="loading-area"></div>

        @include('components.header')

        @yield('content')

        @include('components.footer')

        <!-- BUTTON TOP START -->
        <button class="scroltop">
            <span class="fa-solid fa-arrow-up relative" id="btn-vibrate"></span>Top
        </button>

    </div>

    <!-- LOADING AREA START -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="cssload-container">
                <div class="cssload-progress cssload-float cssload-shadow">
                    <div class="cssload-progress-item"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA END -->

    <!-- STYLE SWITCHER -->
    <div class="styleswitcher">

        <div class="switcher-btn-bx">
            <a class="switch-btn">
                <span class="fa-solid fa-cog fa-spin"></span>
            </a>
        </div>

        <div class="styleswitcher-inner">

            <h5 class="switcher-title">Color Skin</h5>

            <ul class="color-skins">
                <li><a class="theme-skin skin-1" href="?theme=assets/css/skin/skin-1"
                        title="default Theme"></a></li>
                <li><a class="theme-skin skin-2" href="?theme=assets/css/skin/skin-2"
                        title="pink Theme"></a></li>
                <li><a class="theme-skin skin-3" href="?theme=assets/css/skin/skin-3"
                        title="sky Theme"></a></li>
                <li><a class="theme-skin skin-4" href="?theme=assets/css/skin/skin-4"
                        title="green Theme"></a></li>
                <li><a class="theme-skin skin-5" href="?theme=assets/css/skin/skin-5"
                        title="red Theme"></a></li>
                <li><a class="theme-skin skin-6" href="?theme=assets/css/skin/skin-6"
                        title="orange Theme"></a></li>
                <li><a class="theme-skin skin-7" href="?theme=assets/css/skin/skin-7"
                        title="purple Theme"></a></li>
                <li><a class="theme-skin skin-8" href="?theme=assets/css/skin/skin-8"
                        title="blue Theme"></a></li>
                <li><a class="theme-skin skin-9" href="?theme=assets/css/skin/skin-9"
                        title="gray Theme"></a></li>
                <li><a class="theme-skin skin-10" href="?theme=assets/css/skin/skin-10"
                        title="brown Theme"></a></li>
                <li><a class="theme-skin skin-11" href="?theme=assets/css/skin/skin-11"
                        title="gray Theme"></a></li>
                <li><a class="theme-skin skin-12" href="?theme=assets/css/skin/skin-12"
                        title="golden Theme"></a></li>
            </ul>

            <h6 class="switcher-title">Nav</h6>

            <ul class="nav-view">
                <li class="nav-light active">Light</li>
                <li class="nav-dark">Dark</li>
            </ul>

            <h6 class="switcher-title">Nav Width</h6>

            <ul class="nav-width">
                <li class="nav-boxed active">Boxed</li>
                <li class="nav-wide">Wide</li>
            </ul>

            <h6 class="switcher-title">Header</h6>

            <ul class="header-view">
                <li class="header-fixed active">Fixed</li>
                <li class="header-static">Static</li>
            </ul>

            <h6 class="switcher-title">Layout</h6>

            <ul class="layout-view">
                <li class="wide-layout active">Wide</li>
                <li class="boxed">Boxed</li>
            </ul>

            <h6 class="switcher-title">Background Image</h6>

            <ul class="background-switcher">

                <li>
                    <img src="{{ asset('assets/images/switcher/switcher-bg/thum/bg1.jpg') }}"
                        rel="{{ asset('assets/images/switcher/switcher-bg/large/bg1.jpg') }}" alt="">
                </li>

                <li>
                    <img src="{{ asset('assets/images/switcher/switcher-bg/thum/bg2.jpg') }}"
                        rel="{{ asset('assets/images/switcher/switcher-bg/large/bg2.jpg') }}" alt="">
                </li>

                <li>
                    <img src="{{ asset('assets/images/switcher/switcher-bg/thum/bg3.jpg') }}"
                        rel="{{ asset('assets/images/switcher/switcher-bg/large/bg3.jpg') }}" alt="">
                </li>

                <li>
                    <img src="{{ asset('assets/images/switcher/switcher-bg/thum/bg4.jpg') }}"
                        rel="{{ asset('assets/images/switcher/switcher-bg/large/bg4.jpg') }}" alt="">
                </li>

            </ul>

        </div>

    </div>
    <!-- STYLE SWITCHER END -->

    <!-- JAVASCRIPT FILES -->

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrolla.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/shortcode.js') }}"></script>
    <script src="{{ asset('assets/js/switcher.js') }}"></script>

    <!-- REVOLUTION  scripts-->
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>


    @stack('scripts')
    <!-- REVOLUTION SCRIPT -->
    <script src="{{ asset('assets/js/rev-script-1.js') }}"></script>
    <script src="{{ asset('assets/js/rev-script-3.js') }}"></script>
</body>

</html>
