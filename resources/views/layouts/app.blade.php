<!DOCTYPE html>
<html>

<head>
	<!-- META TAGS-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- META TAGS-->
	
	<title>{{ __($pageTitle) }}</title>
	<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />
	<!-- BOOTSTRAP 5 -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<!-- BOOTSTRAP 5 -->
    <!-- RESPONSIVE NAVIFATION -->
	<link rel="stylesheet" href="{{ asset('assets/css/stellarnav.min.css') }}" />
	<!-- RESPONSIVE NAVIFATION -->
	<!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- GOOGLE FONTS -->
	<!-- FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<!-- FONT AWESOME -->
	
	<!-- SWIPER SLIDER -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
	<!-- SWIPER SLIDER -->
    <!-- FANCY BOX IMAGE VIEWER -->
	<link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" />
	<!-- FANCY BOX IMAGE VIEWER -->
	<!-- WAITME LOADING -->
	<link rel="stylesheet" href="{{ asset('assets/css/waitMe.min.css') }}">
	<!-- WAITME LOADING -->
	<!-- STYLE SHEETS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
	<!-- STYLE SHEETS -->
</head>

<body>
    <!-- Header -->
    @include('user.partials.header')
    <!-- /Header -->

    @yield('content')

    <!-- Footer -->
    @include('user.partials.footer')
    <!-- /Footer -->

    <!-- Scripts -->
    @include('user.partials.script')
    <!-- /Scripts -->

    @include('user.partials.notify')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('script')
</body>

</html>