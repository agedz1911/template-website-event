<div class="w-full container mx-auto h-screen">
    <div class="flex flex-col ">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-8 gap-5 mx-2">
            <div class="card bg-zinc-50 w-full shadow-xl">
                <div class="card-body">
                    <h2 class="card-title text-primary-900 mb-1">Welcome !</h2>
                    <div class="flex flex-row items-center gap-3">
                        <div class="avatar">
                            <div class="w-12 rounded-full ring-primary ring-offset-base-100 ring ring-offset-2">
                                <img src="https://ui-avatars.com/api/?name={{$user->name}}+{{$user->last_name}}" />
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="font-semibold text-primary-900 text-xl">{{$user->name}} {{$user->last_name}}</p>
                            <p class="text-gray-400  text-sm italic">{{$user->code_participant}} -
                                {{$user->email}}
                            </p>
                            <p class="text-gray-400 text-sm font-semibold">{{$user->country}}</p>
                        </div>
                    </div>
                    <div class="card-actions justify-end md:mt-2 mt-4">
                        <a href="/dashboard/profile" class="btn btn-sm bg-primary-700 hover:bg-primary-600 text-white">Update Profile</a>
                        <button class="btn btn-sm">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <livewire:forms.signout />
                        </button>
                    </div>
                </div>
            </div>
            <div class="card bg-zinc-50 w-full shadow-xl">
                <div class="card-body text-primary-900">
                    <h2 class="card-title ">Card title!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>