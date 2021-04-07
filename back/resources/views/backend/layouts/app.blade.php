<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <meta name="theme-color" content="#212529">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    @yield('head')

    <title>@yield('title')</title>
</head>
<body>

    @include('backend.layouts.header')

    @yield('content')

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    @yield('scripts')

</body>
</html>

