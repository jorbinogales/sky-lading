<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="theme-color" content="#f15c22">
    <link rel="shortcut icon" href="{{ asset('images/logo2.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">

    @yield('head')

    <title>@yield('title')</title>
</head>
<body>
    
    @include('backend.layouts.header')
    
    @yield('content')
    

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    

    <script>
        $(document).ready(function() {

            $('.bootstrap-select').selectpicker();        

        });

    </script>

    @yield('scripts')
    
</body>
</html>

