<!DOCTYPE html>
<html class="scroll-smooth" data-theme="emerald" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    <x-nav.menu />

    {{ $slot }}

    <x-nav.footer />
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-square btn-sm btn-primary z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i class="fa-solid text-white pt-2 fa-arrow-up"></i></a>

    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>