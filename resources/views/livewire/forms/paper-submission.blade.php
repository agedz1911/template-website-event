<div class="flex flex-col  items-center gap-4">
    <div class="card bg- shadow-md w-full max-w-3xl ">
        <div class="card-body gap-3">
            <form wire:submit="create">

                {{$this->form}}

                <div class="card-actions justify-end mt-6">
                    <button wire:click="$commit"
                        class="btn bg-primary-700 hover:bg-primary-600 text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>