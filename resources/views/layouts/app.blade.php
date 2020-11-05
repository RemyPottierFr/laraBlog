<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'LaraBlog')</title>
</head>
<body class="bg-white relative w-screen max-w-screen min-h-screen overflow-x-hidden">

@include('layouts.header')

<div class="relative w-full min-h-screen mt-20">
    @yield('content')
</div>

@include('layouts.footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
