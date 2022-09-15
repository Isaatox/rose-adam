<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/Capture_d_écran_2022-09-15_à_16.24.41-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <title>@yield('pageTitle')</title>
</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="assets/js/bootstrap.js"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
</body>
@stack('script')

</html>
