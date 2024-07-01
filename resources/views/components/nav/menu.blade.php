<div class="sticky top-0 z-50">
  <header class="site-header  bg-slate-50 py-2 px-3" id="sticky-menu">

    <div class="container-default">
      <div class="flex items-center justify-between gap-x-8">
        <!-- Header Logo -->
        <div class="avatar">
          <a href="/" class="h-14">
            <img src="images/logo-wecoc.PNG" alt="WECOC" />
          </a>
        </div>
        <!-- Header Logo -->

        <!-- Header Navigation -->
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item {{ request()->is('/') ? 'text-primary-500' : '' }}">
                <a href="/" class="nav-link-item hover:text-primary-500">Home</a>
              </li>
              <li
                class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger  hover:text-primary-500">Congress
                  Information <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="/congress-information#welcome-message">Welcome Message</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#organizing-committee">Organizing Committee</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#faculties">Faculties</a>
                  </li>
                </ul>
              </li>

              <li
                class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger hover:text-primary-500">Scientific
                  Program
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="/scientific-program#at-glance">Program at Glance</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule">Scientific Schedule</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('registration*') ? 'text-primary-500' : '' }}">
                <a href="/registration" class="nav-link-item hover:text-primary-500">Registration
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger hover:text-primary-500">Submission
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/submission#guideline-abstract">Guideline for Abstract</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/submission#submission">Abstract Submission</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('cardiology-in-jeopardy*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item hover:text-primary-500">Cardiology in Jeopardy
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item {{ request()->is('homecoming*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item hover:text-primary-500">Homecoming
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>

            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-1">
          <a href="https://www.instagram.com/wecoc_ykvi/?igsh=MXYzeHQxYThlbDFqcQ%3D%3D"
            class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i
              class="fa-brands fa-instagram text-rose-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i
              class="fa-brands fa-facebook text-sky-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i
              class="fa-brands fa-square-x-twitter "></i></a>
          <!-- Responsive Offcanvas Menu Button -->
          <div class="block lg:hidden">
            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          @guest
          <button class="btn bg-primary-800 hover:bg-primary-600 text-white inline-block" onclick="login.showModal()">
            <i class="fa-solid fa-lock"></i> Sign in</button>
          @else
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full ring-primary ring-offset-base-100  ring ring-offset-2">
                <img alt="user" src="images/doctor.png" class="ring" />
              </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li>
                <a class="justify-between">
                  Hallo,
                  <span class="badge">{{ Auth::user()->name}}!</span>
                </a>
              </li>
              <li><a>Dashboard</a></li>
              <li>
                <livewire:forms.signout />
              </li>
            </ul>
          </div>
          @endguest
        </div>
        <!-- Header User Event -->
      </div>
    </div>
  </header>

  <dialog id="login" class="modal">
    <div class="modal-box w-full max-w-2xl bg-slate-50">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <div class="text-center py-5">
        <h3 class="text-lg text-primary-900 font-bold">The 36<sup>th</sup> WECOC <br> Weekend Course on Cardiology</h3>
      </div>
      <div x-data="{ openTab: 1 }" class="p-2">
        <div class="w-full mx-auto">
          <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
            <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }"
              class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign
              in</button>
            <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }"
              class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign
              up</button>
          </div>

          <div x-show="openTab === 1"
            class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
            <livewire:forms.signin />
          </div>

          <div x-show="openTab === 2"
            class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
            <livewire:forms.signup />
          </div>

        </div>
      </div>
      <div class="modal-action">
        <form method="dialog">
          <button class="btn"> Close</button>
        </form>
      </div>
    </div>
  </dialog>
</div>