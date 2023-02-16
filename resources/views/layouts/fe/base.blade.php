<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.fe.meta')

    <title>{{ config('app.name2', 'Việt nam đó đây') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('fe') }}/img/icon/bavel.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('layouts.fe.css')

</head>

<body>

    @include('layouts.fe.header')

    @yield('content')

    @include('layouts.fe.footer')

    @include('layouts.fe.js')

</body>

</html>
