<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/shared/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />
</head>
<body>
    <div id="app">
        <div class="container-scroller">
            @include('partials.header')
            <div class="container-fluid page-body-wrapper">
                @include('partials.sidebar')
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                    <footer class="footer">
                        <div class="container-fluid clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
                            </span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{ asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('js/shared/misc.js')}}"></script>
    <script src="{{ asset('js/demo_1/dashboard.js')}}"></script>
    @yield('bottom')
</body>
</html>
