<div>
    <button class="btn bg-primary-800 hover:bg-primary-600 text-white inline-block" onclick="login.showModal()">
        <i class="fa-solid fa-lock"></i> Sign in</button>

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
                        <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign
                            in</button>
                        <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }" class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">Sign
                            up</button>
                    </div>

                    <div x-show="openTab === 1" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
                        <livewire:forms.signin />
                    </div>

                    <div x-show="openTab === 2" class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-primary-600">
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