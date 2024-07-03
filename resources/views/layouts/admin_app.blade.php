<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ __($pageTitle) }} | Habit Fitness</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
    <!-- Toastr CSS -->
    <link href="{{ asset('assets/admin/bundles/izitoast/css/iziToast.min.css') }}" rel="stylesheet">
    <!-- jQuery Fancybox-->
    <link href="{{ asset('assets/admin/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/user/images/logo.png') }}" />

    @stack('stylesheet')
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.partials.header')
            
            @include('admin.partials.sidebar')

            <!-- Main Content -->
            <div class="main-content">

                @yield('content')

            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Habit Fitness
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    @include('admin.partials.script')

    @include('user.partials.notify')

    @stack('script')
</body>

</html>
