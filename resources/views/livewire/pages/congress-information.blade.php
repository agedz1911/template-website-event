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
        <div class="flex flex-col gap-3">
            <p class="text-justify">Weekend Course in Cardiology (WECOC): Augmenting Intelligence in Cardiology and Vascular Medicine</p>
            <p class="text-justify">The Weekend Course in Cardiology (WECOC), hosted by the Department of Cardiology and Vascular Medicine at the Faculty of Medicine, Universitas Indonesia, has been a cornerstone of scientific excellence since its inception in 1989. This annual event, which continues to thrive, serves as a vital platform for medical professionals to stay abreast of cutting-edge advancements in cardiology.</p>
            <p class="text-justify">Key Highlights of WECOC:
            <ul class="list-decimal ml-5">
                <li>Long-Standing Tradition: As the oldest cardiology scientific event in Indonesia, WECOC has consistently fostered collaboration, learning, and innovation within the cardiology community</li>
                <li>Educational Focus: WECOC's primary objective is to disseminate the latest scientific and technological updates relevant to cardiologists, general practitioners, and other specialists. By addressing daily cardiovascular challenges, WECOC equips participants with practical insights and evidence-based approaches</li>
                <li>Robust Participation: Over the past six years, WECOC has attracted an impressive cohort of 700-800 participants annually. This diverse audience includes cardiologists, medical students, paramedics, and other healthcare professionals</li>
                <li>Scientific Programs: WECOC's agenda features a rich array of sessions, including:
                    <ul class="list-disc ml-5">
                        <li>Plenary Sessions: Engaging talks by renowned experts</li>
                        <li>Symposiums: In-depth discussions on specialized topics</li>
                        <li>Workshops: Hands-on learning experiences</li>
                    </ul>
                </li>
                <li>Industry Engagement: Beyond academic sessions, WECOC hosts exhibitions where pharmaceutical and medical equipment companies showcase their latest innovations. This synergy between science and industry fosters collaborative partnerships and drives progress</li>
            </ul>
            </p>
            <p class="text-justify">Save the Date!</p>
            <p class="text-justify">The 36th Weekend Course in Cardiology is scheduled for October 25-26, 2024. Mark your calendars and join us for an enriching experience that promises to elevate cardiovascular care.</p>
            <p class="text-justify">For more information and registration details, visit the official WECOC website: WECOC 2024 http://wecoc.id/</p>
            <p class="text-justify">Feel free to explore the WECOC website for further details and updates. If you have any specific questions, don't hesitate to ask!</p>
            <p class="text-justify">Welcome to the full offline conference of the 36th WECOC 2024.</p>
            <p class="text-justify">Warm regards,</p>
            <img class="float-left rounded-full ring ring-primary ring-offset-base-100 ring-offset-4 w-40 m-3" src="storage/10/1k7yJRWd2d3MeeNC5CxnNyhDJXmalD-metaQ2hhaXJtYW4gZHIuIFNvbnkgSGlsYWwgV2ljYWtzb25vLCBTcC5KUChLKS5wbmc=-.png">
            <div class="">
                <p class="font-semibold underline">Sony Hilal Wicaksono, MD</p>
                <p class="text-xs font-semibold">Congress Chairperson, <br>
                    The 36<sup>th</sup> Weekend Course of Cardiology
                </p>
            </div>
        </div>
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