<!DOCTYPE html>
<html data-theme="emerald" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name')  }}</title>

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

    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>
