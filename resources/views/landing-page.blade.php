<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Icon-Button.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body style="height: 100vh;width: 100%;max-height: 100vh; background: #191e29;">



        <div class="d-lg-flex d-xl-flex align-items-lg-center justify-content-xl-center align-items-xl-center"
            style="width: 100%;height: 100vh;background: #191e29;border: 3px none #01c38d;">
            <div class="container d-xl-flex flex-column justify-content-center justify-content-xl-center align-items-xl-center"
                style="height: 688.797px;"><img class="d-xl-flex" src="/img/icons8-test-passed-96.png"
                    style="width: 135px;" />
                <h1 style="text-align: center;color: rgb(255,255,255);font-size: 50px;width: 388px;">Quiz App</h1>
                <h1 style="text-align: center;color: #01c38d;font-size: 100px;width: 432px;margin-top: 15px;">Welcome</h1>
                <a href="/login" class="btn btn-primary btn-log-reg" role="button">Login</a>
                <a href="/register" class="btn btn-primary btn-log-reg" role="button">Register</a>
            </div>
        </div>
  

</body>

</html>
