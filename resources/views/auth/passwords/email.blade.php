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

	<title>Habit Fitness | Login</title>
	<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />
	<!-- BOOTSTRAP 5 -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
	<!-- BOOTSTRAP 5 -->
    
	<!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- GOOGLE FONTS -->
	<!-- FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<!-- FONT AWESOME -->
	<!-- WAITME LOADING -->
	<link rel="stylesheet" href="{{ asset('assets/css/waitMe.min.css') }}">
	<!-- WAITME LOADING -->
	<!-- STYLE SHEETS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <link rel="preload" href="BrushedTraveler.woff2" as="font" type="font/woff2" crossorigin>
	<!-- STYLE SHEETS -->
</head>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="LoginPage">
    <form class="loginForm" method="POST" action="{{ route('password.email') }}">
        @csrf
        <h1 class="loginHeading mb-5">{{ __('Forgot Password') }}</h1>
        <div class="login_content">
            <div class="inputForm">
                <label for="">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="btn__section">
                {{-- <input >Login</a> --}}
                <button type="submit" class="cta">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
            <div class="login_links mt-5">
                <div class="social_links mt-5">
                    <a href="#" class="apps"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="apps"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="apps"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </form>
</section>

@include('user.partials.script')

@include('user.partials.notify')

</body>
</html>