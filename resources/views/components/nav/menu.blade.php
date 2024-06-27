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
              <li class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger  hover:text-primary-500">Congress Information <i class="fa-solid fa-angle-down"></i>
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

              <li class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-primary-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger hover:text-primary-500">Scientific Program
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
          <a href="https://www.instagram.com/wecoc_ykvi/?igsh=MXYzeHQxYThlbDFqcQ%3D%3D" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-instagram text-rose-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-facebook text-sky-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-square-x-twitter "></i></a>
          <!-- Responsive Offcanvas Menu Button -->
          <div class="block lg:hidden">
            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
          <!-- <button class="btn bg-primary-200 hover:bg-primary-600 hover:text-white border-none inline-block" onclick="signup.showModal()"><i class="fa-solid fa-user-plus"></i> Sign up</button> -->
          <button class="btn bg-primary-800 hover:bg-primary-600 text-white inline-block" onclick="login.showModal()"><i class="fa-solid fa-lock"></i> Sign in</button>
        </div>
        <!-- Header User Event -->
      </div>
    </div>
  </header>

  <dialog id="signup" class="modal">
    <div class="modal-box">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <div class="flex flex-col gap-2">
        <div class="text-center mb-5">
          <h3 class="text-lg font-bold">Sign up</h3>
          <h3 class="text-lg font-bold">WECOC</h3>
        </div>
        <div class="flex flex-col md:flex-row gap-2">
          <label class="form-control w-full">
            <div class="label">
              <span class="label-text">First Name</span>
            </div>
            <input type="text" placeholder="John" class="input input-bordered rounded-lg input-primary w-full " />
          </label>
          <label class="form-control w-full">
            <div class="label">
              <span class="label-text">Last Name</span>
            </div>
            <input type="text" placeholder="Doe" class="input input-bordered rounded-lg input-primary w-full " />
          </label>
        </div>
        <label class="form-control w-full">
          <div class="label">
            <span class="label-text">Email</span>
          </div>
          <input type="email" placeholder="JohnDoe@mail.com" class="input input-bordered rounded-lg input-primary w-full " />
        </label>
        <label class="form-control w-full">
          <div class="label">
            <span class="label-text">Password</span>
          </div>
          <input type="password" placeholder="*********" class="input input-bordered rounded-lg input-primary w-full " />
        </label>
        <div class="modal-action">
          <button class="btn bg-primary-900 hover:bg-primary-600 text-white"><i class="fa-solid fa-user"></i> Submit</button>
          <form method="dialog">
            <button class="btn"><i class="fa-solid fa-x"></i> Close</button>
          </form>
        </div>
      </div>
    </div>
  </dialog>

  <dialog id="login" class="modal">
    <div class="modal-box w-full max-w-3xl bg-slate-50">
      <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
      </form>
      <div class="text-center py-5">
        <h3 class="text-lg text-primary-900 font-bold">The 36<sup>th</sup> WECOC <br> Weekend Course on Cardiology</h3>
      </div>
      <div x-data="{ openTab: 1 }" class="p-2">
        <div class="w-full mx-auto">
          <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
            <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign in</button>
            <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign up</button>
          </div>

          <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
            <div class="flex flex-col items-center justify-center gap-2">

              <label class="form-control w-full max-w-lg">
                <div class="label">
                  <span class="label-text">Email</span>
                </div>
                <input type="email" placeholder="JohnDoe@mail.com" class="input input-bordered rounded-lg input-primary w-full " />
              </label>
              <label class="form-control w-full max-w-lg">
                <div class="label">
                  <span class="label-text">Password</span>
                </div>
                <input type="password" placeholder="*********" class="input input-bordered rounded-lg input-primary w-full " />
              </label>
              <button class="btn bg-primary-900 hover:bg-primary-600 text-white w-full mt-3 mb-6 max-w-lg"> Sign in</button>
            </div>
          </div>

          <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
            <div class="flex flex-col items-center justify-center gap-2">
              <div class="flex max-w-lg w-full flex-col md:flex-row gap-2">
                <label class="form-control w-full">
                  <div class="label">
                    <span class="label-text">First Name</span>
                  </div>
                  <input type="text" placeholder="John" class="input input-bordered rounded-lg input-primary w-full " />
                </label>
                <label class="form-control w-full ">
                  <div class="label">
                    <span class="label-text">Last Name</span>
                  </div>
                  <input type="text" placeholder="Doe" class="input input-bordered rounded-lg input-primary w-full " />
                </label>
              </div>
              <label class="form-control w-full max-w-lg">
                <div class="label">
                  <span class="label-text">Email</span>
                </div>
                <input type="email" placeholder="JohnDoe@mail.com" class="input input-bordered rounded-lg input-primary w-full " />
              </label>
              <label class="form-control w-full max-w-lg">
                <div class="label">
                  <span class="label-text">Password</span>
                </div>
                <input type="password" placeholder="*********" class="input input-bordered rounded-lg input-primary w-full " />
              </label>
              <button class="btn bg-primary-900 hover:bg-primary-600 text-white w-full mt-3 mb-6 max-w-lg"> Sign up</button>
            </div>
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