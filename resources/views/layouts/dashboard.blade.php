<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,900&display=swap"
        rel="stylesheet">
    <title>@yield('title', 'LaraBlog')</title>
</head>
<body class="bg-white flex flex-no-wrap h-screen w-screen">

@include("layouts.vertical-header")

<div class="relative w-full h-screen px-2 overflow-y-scroll overflow-x-hidden">
    @yield('content')
    @include('layouts.footer')
</div>


<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
