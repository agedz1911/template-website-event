<div class="w-full pb-10 container mx-auto">
    <h1 class="text-2xl font-semibold mb-8 pt-4">Profile</h1>
    <div class="flex flex-col items-center gap-5">
        <div class="flex items-end justify-end w-full">
            <!-- You can open the modal using ID.showModal() method -->
            @foreach ($user->roles as $role)
            @if ($role->name != 'user')
            <button class="btn btn-success text-white">Add New</button>
            @else
            <button class="btn btn-success text-white" onclick="my_modal_3.showModal()">Fill Biodata</button>
            @endif
            @endforeach
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box w-11/12 max-w-5xl">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <div class="card bg-base-100 pt-5 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title mb-5">Biodata</h2>
                            <form wire:submit="update" method="dialog">
                                {{$this->form}}
                                <div class="card-actions justify-end mt-5">
                                    <button class="btn btn-primary" wire:click="$refresh">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </dialog>
        </div>
        <div class="w-full">
            {{$this->table}}
        </div>

    </div>
</div>