<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('')}}assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
     <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">

	<!-- Plugins CSS -->
    <link href="{{asset('')}}assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('')}}assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{asset('')}}assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{asset('')}}assets/switcher/demo.css" rel="stylesheet">


</head>
<body class="app sidebar-mini ltr login-img">
        <!-- BACKGROUND-IMAGE -->
        <div class="">



            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <!-- Theme-Layout -->

                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto mt-7">
                        <div class="text-center">
                            <a href="#"><img src="{{asset('')}}assets/images/brand/logo-white.png" class="header-brand-img" alt=""></a>
                        </div>
                    </div>

                    <div class="container-login100">
                        @yield('content')
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->


    <!-- JQUERY JS -->
    <script src="{{asset('')}}assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('')}}assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('')}}assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset('')}}assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{asset('')}}assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('')}}assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{asset('')}}assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('')}}assets/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="{{asset('')}}assets/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="{{asset('')}}assets/switcher/js/switcher.js"></script>
</body>
</html>
