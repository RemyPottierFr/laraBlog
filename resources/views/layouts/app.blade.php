<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,900&display=swap" rel="stylesheet">
    <title>@yield('title', 'LaraBlog')</title>
</head>
<body class="bg-white relative min-h-screen overflow-x-hidden max-w-6xl mx-auto overflow-x-hidden font-poppins">

@include('layouts.header')

<div class="relative w-full h-full pt-20 py-8 px-2">
    @yield('content')
</div>

@include('layouts.footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
