<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name', 'Puskesmas') }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="{{ asset('assets/modules/component/img/stisla-fill.svg')}}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>
                        @if ($errors)
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        </div>
                        @endforeach
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}" class="needs-validation"
                                    novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" required class="form-control" name="email">
                                        <x-input-error for="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" name="name">
                                        <x-input-error for="name" />
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control"
                                                name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/modules/popper.js')}}"></script>
    <script src="{{ asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/auth-register.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>