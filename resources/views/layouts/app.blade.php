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
            <div class="loading-text" style="position: absolute; top: calc(50% + 70px); left: 50%; transform: translateX(-50%); text-align: center; width: 100%;">
                <h1 style="font-family: 'Poppins', sans-serif; color: #EC5598; font-weight: 700; letter-spacing: 10px; text-transform: uppercase; margin: 0; font-size: 28px; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">Pureexa</h1>
                <div style="width: 40px; height: 2px; background: #EC5598; margin: 10px auto;"></div>
                <p style="font-family: 'Poppins', sans-serif; color: #666; font-size: 11px; letter-spacing: 4px; text-transform: uppercase; margin: 0; font-weight: 500;">Health & Beauty Spa</p>
            </div>
        </div>
    </div>
    <!-- LOADING AREA END -->

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
