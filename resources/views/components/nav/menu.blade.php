<div class="sticky top-0 z-10">
  <div class="navbar bg-slate-50 w-full ">
    <div class="navbar-start ">
      <div class="mx-2 flex-1 px-2">
        <div class="avatar">
          <a href="/" class="h-14">
            <img src="images/logo-wecoc.PNG" alt="WECOC" />
          </a>
        </div>
      </div>
    </div>

    <div class="hidden flex-none navbar-center lg:block">
      <ul class="site-menu-main ">

        <li class="nav-item {{ request()->is('/') ? 'text-primary-500' : '' }}">
          <a href="/" class="nav-link-item hover:text-primary-500">Home</a>
        </li>
        <li class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-primary-500' : '' }}">
          <a class="nav-link-item drop-trigger  hover:text-primary-500">Congress
            Information <i class="fa-solid fa-angle-down"></i></a>
          <ul class="p-2 sub-menu">
            <li class="sub-menu--item"><a href="/congress-information#welcome-message" wire:click="$refresh">Welcome Message</a></li>
            <li class="sub-menu--item"><a href="/congress-information#organizing-committee" wire:click="$refresh">Organizing Committee</a></li>
            <li class="sub-menu--item"><a href="/congress-information#faculties" wire:click="$refresh">Faculties</a></li>
          </ul>
        </li>
        <li class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-primary-500' : '' }}">
          <a class="nav-link-item drop-trigger  hover:text-primary-500">Scientific
            Program <i class="fa-solid fa-angle-down"></i></a>
          <ul class="p-2 sub-menu">
            <li class="sub-menu--item"><a href="/scientific-program#at-glance" wire:click="$refresh">Program at Glance</a></li>
            <li class="sub-menu--item"><a href="/scientific-program#schedule" wire:click="$refresh">Scientific Schedule</a></li>
          </ul>
        </li>
        <li class="nav-item {{ request()->is('registration*') ? 'text-primary-500' : '' }}">
          <a href="/registration" wire:click="$refresh" class="nav-link-item hover:text-primary-500">Registration<i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-primary-500' : '' }}">
          <a class="nav-link-item drop-trigger  hover:text-primary-500">Submission <i class="fa-solid fa-angle-down"></i></a>
          <ul class="p-2 sub-menu">
            <li class="sub-menu--item"><a href="/submission#guideline-abstract" wire:click="$refresh">Guideline for Abstract</a></li>
            <li class="sub-menu--item">
              @guest
              <a href="/signin" wire:click="$refresh">Abstract Submission</a>
              @else
              <a href="/dashboard/submission" wire:click="$refresh">Abstract Submission</a>
              @endguest
            </li>
          </ul>
        </li>
        <li class="nav-item {{ request()->is('/cardiology-in-jeopardy') ? 'text-primary-500' : '' }}">
          <a href="javascript:void(0)" wire:click="$refresh" class="nav-link-item hover:text-primary-500">Cardiology in Jeopardy<i class="fa-solid fa-angle-down"></i></a>
        </li>
        <li class="nav-item {{ request()->is('/cardiology-in-jeopardy') ? 'text-primary-500' : '' }}">
          <a href="javascript:void(0)" wire:click="$refresh" class="nav-link-item hover:text-primary-500">Homecoming<i class="fa-solid fa-angle-down"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-end ">
      <div class="lg:hidden">
        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost float-end">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-6 w-6 stroke-current">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </label>
      </div>
      <a href="https://www.instagram.com/wecoc_ykvi/?igsh=MXYzeHQxYThlbDFqcQ%3D%3D" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-instagram text-rose-500 "></i></a>
      <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-facebook text-sky-500 "></i></a>
      <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-square-x-twitter "></i></a>
      @guest
      <a href="/signin" class="btn bg-primary-800 hover:bg-primary-600 text-white">
        <i class="fa-solid fa-lock"></i> Sign in</a>
      @else
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
          <div class="avatar">
            <div class="w-8 rounded-full ring-primary ring-offset-base-100 ring ring-offset-2">
              <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}+{{Auth::user()->last_name}}" />
            </div>
          </div>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-lg z-[1] mt-3 w-52 p-2 shadow">
          <li>
            <a class="justify-between">
              Hallo,
              <span class="badge">{{ Auth::user()->name}}!</span>
            </a>
          </li>
          <li>
            <a href="/dashboard" wire:navigate class="link link-hover justify-between">
              Dashboard
              <span><i class="fa-solid fa-gear"></i> </span>
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
      @endguest
    </div>
  </div>
</div>