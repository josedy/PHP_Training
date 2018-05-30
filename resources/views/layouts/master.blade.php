<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css">

        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @include('layouts.navbar')
        @yield('body')
        @include('layouts.footer')
    </body>
</html>
