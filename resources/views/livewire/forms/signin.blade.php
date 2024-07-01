<div class="flex flex-col gap-3 pt-5 pb-10">
    @if (Session::has('error'))
    <div role="alert" class="alert bg-red-600 text-white">
        {{ Session::get('error') }}
    </div>
    @endif

    <form wire:submit="authenticate">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Email</span>
            </div>
            <input type="email" wire:model="email" class="input input-bordered rounded-md w-full" />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Password</span>
            </div>
            <input type="password" wire:model="password" class="input input-bordered rounded-md w-full" />
        </label>
        <button type="submit" class="btn bg-primary-700 text-white hover:bg-primary-600 mt-5 w-full">SUBMIT</button>
    </form>
    <div class="divider">OR</div>
    <p class="text-slate-500 text-center text-sm">Don't Have account? please Sign up</p>
</div>