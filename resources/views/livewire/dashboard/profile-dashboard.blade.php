<div class="w-full pb-10 container mx-auto">
    <h1 class="text-2xl font-semibold mb-8">Profile</h1>
    <div class="flex flex-col items-center gap-5">
        <div class="flex flex-col md:flex-row justify-evenly items-center w-full gap-3">
            <div class="card bg-base-100 w-full md:max-w-lg shadow">
                <div class="card-body">
                    <h2 class="card-title mb-1">Welcome !</h2>
                    <div class="flex flex-row items-start gap-3">
                        <div class="avatar">
                            <div class="w-12 rounded-full ring-primary ring-offset-base-100 ring ring-offset-2">
                                <img src="https://ui-avatars.com/api/?name={{$user->name}}+{{$user->last_name}}" />
                            </div>
                        </div>
                        <div class="flex-col">
                            <p class="font-semibold text-xl">{{$user->name}} {{$user->last_name}}</p>
                            <p class="text-gray-400 text-sm italic">{{$user->code_participant}} -
                                {{$user->email}}</p>
                            <p class="text-gray-400 text-sm font-semibold">{{$user->country}}</p>
                        </div>
                    </div>
                    <div class="card-actions justify-end ">
                        <button class="btn">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <livewire:forms.signout />
                        </button>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-full md:max-w-lg shadow">
                <div class="card-body relative">
                    <h2 class="card-title mb-1">Created at</h2>
                    <p>{{$user->created_at->diffForHumans()}}</p>
                    <h2 class="card-title mb-1">Last modified at</h2>
                    <p>{{$user->updated_at->diffForHumans()}}</p>
                </div>
            </div>
        </div>
        <!-- <div class="">
            {{$this->table}}
        </div> -->
        <div class="card bg-base-100 w-full md:max-w-2xl lg:max-w-3xl shadow-xl">
            <div class="card-body">
                <form wire:submit="update">
                    {{$this->form}}
                    <div class="card-actions justify-end mt-5">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>