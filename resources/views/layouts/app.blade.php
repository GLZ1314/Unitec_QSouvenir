<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'QualitySouvenir') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.css')}} "/>
    <link rel="stylesheet" href="{{ asset('css/site.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/myStyle.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="theme-color" content="#ffffff">

</head>
<body>


{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
<div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts._footer')
</div>

<script src="{{ asset('lib/jquery/dist/jquery.js')}}"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{ asset('lib/jquery/dist/jquery.validation.js')}}"></script>
<script src="{{ asset('js/site.js')}}"></script>

</body>
</html>