<div class="w-full pb-10 container mx-auto">
    <div class="flex flex-col gap-5">
        <h1 class="text-2xl font-semibold mb-8 pt-4">Submission</h1>
        <div class="flex justify-end">
            @foreach (Auth::user()->roles as $role)
            @if ($role->name == 'user')
            <button class="btn btn-success text-white" onclick="my_modal_5.showModal()">Add
                Abstract</button>
            @endif
            @endforeach
        </div>
        {{$this->table}}
    </div>

    <dialog id="my_modal_5" class="modal modal-middle">
        <div class="modal-box w-11/12 max-w-3xl">
            <form method="dialog">
                <button wire:click="$refresh" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Abstract Submission</h3>
            <livewire:forms.paper-submission />
        </div>
    </dialog>
</div>