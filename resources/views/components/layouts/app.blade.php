<!DOCTYPE html>
<html class="scroll-smooth" data-theme="emerald" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? config('app.name') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/logo/favicon.ico">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <!-- <x-nav.menu /> -->
    <div class="drawer ">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <x-nav.menu />
            {{ $slot }}
            <!-- Page content here -->
        </div>
        <div class="drawer-side z-50">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>

            <ul class="menu bg-base-200 min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <li class="{{ request()->is('/') ? 'text-primary-500' : '' }}"><a href="/" wire:navigate class="nav-link-item hover:text-primary-500">
                        Home
                    </a></li>
                <li class="{{ request()->is('congress-information*') ? 'text-primary-500' : '' }}">
                    <details open>
                        <summary>Congress Information </summary>
                        <ul>
                            <li><a href="/congress-information#welcome-message" wire:click="$refresh">Welcome Message</a></li>
                            <li><a href="/congress-information#organizing-committee" wire:click="$refresh">Organizing Committee</a></li>
                            <li><a href="/congress-information#faculties" wire:click="$refresh">Faculties</a></li>
                        </ul>
                    </details>
                </li>
                <li class="{{ request()->is('scientific-program*') ? 'text-primary-500' : '' }}">
                    <details open>
                        <summary>Scientific Program</summary>
                        <ul>
                            <li><a href="/scientific-program#at-glance" wire:click="$refresh">Program at Glance</a></li>
                            <li><a href="/scientific-program#schedule" wire:click="$refresh">Scientific Schedule</a></li>
                        </ul>
                    </details>
                </li>
                <li class="request()->is('submission*') ? 'text-primary-500' : ''">
                    <a href="/registration" wire:click="$refresh">Registration</a>
                </li>
                <li class="{{request()->is('submission*') ? 'text-primary-500' : ''}}">
                    <details open>
                        <summary>Submission</summary>
                        <ul>
                            <li><a href="/submission#guideline-abstract" wire:click="$refresh">Program at Glance</a></li>
                            <li><a href="/submission#submission" wire:click="$refresh">Scientific Schedule</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    @livewire('notifications')

    <x-nav.footer />
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-square btn-sm btn-primary z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i class="fa-solid text-white pt-2 fa-arrow-up"></i></a>

    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>