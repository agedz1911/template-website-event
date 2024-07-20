<div class="bg-slate-50">
    <div class="pt-14 pb-24 lg:px-10 px-4">
        <div class="flex flex-col gap-5 justify-between lg:flex-row">
            <div class="w-full justify-center flex">
                <img src="images/about_left.png" class="w-fit transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105" />
            </div>
            <div class="w-full px-0 lg:pl-10 lg:py-5">
                <img src="images/logo-wecoc.PNG" class="w-44" />
                <h1 class="text-4xl mt-5 text-primary-800 mb-5 font-bold">Weekend Course on Cardiology</h1>
                <p class="text-slate-400 italic lg:mt-10 mt-4">"Theme: Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit "
                </p>
                <div class="mt-5">
                    <div class="font-semibold mt-5 text-slate-500">
                        <p>October 25<sup>th</sup> - 26<sup>th</sup>, 2024</p>
                        <p>JW Marriot Hotel, Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="lg:mt-10 mt-5 flex items-center gap-4">
                    <button class="btn btn-lg bg-primary-800 hover:bg-primary-600 border-none text-white ">Register
                        Now</button>
                    <button class="btn btn-outline-primary btn-lg">Read More</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4  w-full gap-2  mt-5 md:mt-8" id="countdown">
                    <div class="card w-36 bg-primary-700 text-white ">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="days"></h2>
                            <p class="text-center">Days</p>
                        </div>
                    </div>
                    <div class="card bg-primary-700 w-36 text-white">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="hours"></h2>
                            <p class="text-center">Hours</p>
                        </div>
                    </div>
                    <div class="card bg-primary-700 w-36 text-white">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="mins"></h2>
                            <p class="text-center">Minutes</p>
                        </div>
                    </div>
                    <div class="card bg-primary-700 w-36 text-white">
                        <div class="card-body">
                            <h2 class="card-title justify-center" id="secs"></h2>
                            <p class="text-center">Seconds</p>
                        </div>
                    </div>
                    <div id="end"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-local pt-20 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="welcome-message">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Welcome Message</h1>
        </div>
        <livewire:resources.welcome-message />
    </div>

    <div class="pt-24 pb-52 lg:px-20 px-5" id="organizing-committee">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Organizing Committee</h1>
        </div>
        <livewire:resources.committee />
    </div>

    <div class="bg-local pt-24 pb-52 lg:px-20 px-5 bg-doctor bg-primary-50" id="faculties">
        <div class="flex-col flex gap-3 mb-16">
            <h4 class="text-2xl text-primary-600 font-semibold">Congress Information</h4>
            <h1 class="text-4xl text-primary-700 font-semibold">Faculties</h1>
        </div>
        <livewire:resources.faculty />
    </div>
</div>
