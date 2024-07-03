<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Password | Habit Fitness</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/user/images/logo.png') }}" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Reset Password</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Enter Your New Password</p>
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email"
                                            class="form-control  @error('email') is-invalid @enderror" name="email"
                                            tabindex="1" value="{{ $email ?? old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input type="password" id="email"
                                            class="form-control  @error('password') is-invalid @enderror pwstrength" data-indicator="pwindicator"
                                            name="password" value="{{ old('password') }}" tabindex="2" required>
                                        @error('password')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" tabindex="2" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/admin/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

</body>


<!-- auth-forgot-password.html  21 Nov 2019 04:05:02 GMT -->

</html>
