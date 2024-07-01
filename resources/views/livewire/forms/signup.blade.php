<div>
    @if (session('status'))
    <div role="alert" class="alert bg-info-content text-white">
        {{ session('status') }}, Sign in to Countinue!
    </div>
    @endif
    <div class="flex flex-col gap-3 py-10">
        <form wire:submit="create">
            {{ $this->form }}
            <button type="submit" class="btn bg-primary-700 text-white hover:bg-primary-600 mt-5 w-full">REGISTER</button>
        </form>
        <div class="divider">OR</div>
        <p class="text-slate-500 text-center text-sm">Have account? please sign in</p>
    </div>
</div>