<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title ?? config('app.name') }}</title>

    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body>
    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div class="flex flex-row justify-between">
                <!-- Page content here -->
                <label for="my-drawer" class="btn btn-ghost ml-3 mt-2 btn-circle drawer-button"><i class="fa-solid fa-bars text-xl "></i></label>
                <div class="dropdown dropdown-end block ">
                    <div tabindex="0" role="button" class="flex space-x-3 items-center p-4">
                        <div class="flex-none flex justify-center">
                            <div class="avatar">
                                <div class="w-8 rounded-full ring-primary ring-offset-base-100 ring ring-offset-2">
                                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}+{{Auth::user()->last_name}}" />
                                </div>
                            </div>
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
        <div class="drawer-side z-50">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                <!-- Sidebar content here -->
                <li><a href="/dashboard" wire:navigate class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-house"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li><a href="/dashboard/submission" wire:navigate class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-file-arrow-up"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Abstract Submission</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/registration" wire:navigate class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Registration</span>
                        <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Biodata</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/profile" wire:navigate class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-user"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                        <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Biodata</span>
                    </a>
                </li>
                
                <li>
                    <div class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-arrow-right-from-bracket flex-shrink-0 mr-3"></i>
                        <livewire:forms.signout />
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <x-nav.side-menu />

    <div class="p-4 sm:ml-64">
        <div class="border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">

            {{ $slot }}
        </div>
    </div>


    @livewire('notifications')
    <!-- <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-square btn-sm btn-primary z-40 fixed right-5 md:right-10 bottom-10 over:-translate-y-1 hover:scale-105"><i class="fa-solid text-white fa-arrow-up"></i></a> -->
    <script src="js/custom.js"></script>
    @filamentScripts
    @vite('resources/js/app.js')
</body>

</html>