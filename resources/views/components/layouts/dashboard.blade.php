<!DOCTYPE html>
<html class="scroll-smooth" data-theme="emerald" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title ?? 'Dashboard' }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/logo/favicon.ico">

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

<body class="antialiased ">
    <div class="fixed w-full z-30 flex bg-white dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-10 border-b">
        <div class="logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center">
            Event Template Website
        </div>
        <!-- SPACER -->
        <div class="grow h-full flex items-center justify-center"></div>
        <div class="flex-none h-full text-center flex items-center justify-center">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="flex space-x-3 items-center px-3">
                    <div class="flex-none flex justify-center">
                        <div class="avatar">
                            <div class="w-8 rounded-full ring-primary ring-offset-base-100 ring ring-offset-2">
                                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}+{{Auth::user()->last_name}}" />
                            </div>
                        </div>
                        <!-- <div class="w-8 h-8 flex ">
                            <img src="/images/doctor.png" alt="profile" class="shadow rounded-full object-cover ring-primary ring-offset-base-100 ring ring-offset-2" />
                        </div> -->
                    </div>
                    <div class="hidden md:block text-sm md:text-md text-black dark:text-white">
                        @auth
                        {{ Auth::user()->name}}
                        @endauth
                    </div>
                </div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100  rounded-box z-[1] w-52 p-2 shadow mt-2">
                    <li>
                        <a class="link link-hover justify-between" href="/">Home Page
                            <span><i class="fa-solid fa-globe"></i></span>
                        </a>
                    </li>
                    <li>
                        <div class="justify-between">
                            <livewire:forms.signout />
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <x-nav.side-menu />
    @livewire('notifications')

    <div class="content bg-slate-50 ml-12 transform ease-in-out duration-500 pt-14 px-2 md:px-5 pb-4">
        <div class="flex flex-wrap my-5 -mx-2 lg:p-10 w-full dark:text-white">
            {{ $slot }}
        </div>
    </div>

    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
        const maxToolbar = document.querySelector(".max-toolbar")
        const logo = document.querySelector('.logo')
        const content = document.querySelector('.content')
        const moon = document.querySelector(".moon")
        const sun = document.querySelector(".sun")

        function setDark(val) {
            if (val === "dark") {
                document.documentElement.classList.add('dark')
                moon.classList.add("hidden")
                sun.classList.remove("hidden")
            } else {
                document.documentElement.classList.remove('dark')
                sun.classList.add("hidden")
                moon.classList.remove("hidden")
            }
        }

        function openNav() {
            if (sidebar.classList.contains('-translate-x-48')) {
                // max sidebar 
                sidebar.classList.remove("-translate-x-48")
                sidebar.classList.add("translate-x-none")
                maxSidebar.classList.remove("hidden")
                maxSidebar.classList.add("flex")
                miniSidebar.classList.remove("flex")
                miniSidebar.classList.add("hidden")
                maxToolbar.classList.add("translate-x-0")
                maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                logo.classList.remove("ml-12")
                content.classList.remove("ml-12")
                content.classList.add("ml-12", "md:ml-60")
            } else {
                // mini sidebar
                sidebar.classList.add("-translate-x-48")
                sidebar.classList.remove("translate-x-none")
                maxSidebar.classList.add("hidden")
                maxSidebar.classList.remove("flex")
                miniSidebar.classList.add("flex")
                miniSidebar.classList.remove("hidden")
                maxToolbar.classList.add("translate-x-24", "scale-x-0")
                maxToolbar.classList.remove("translate-x-0")
                logo.classList.add('ml-12')
                content.classList.remove("ml-12", "md:ml-60")
                content.classList.add("ml-12")
            }

        }
    </script>

    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>