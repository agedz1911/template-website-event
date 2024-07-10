<div>
    @if (session('status'))
    <div role="alert" class="alert bg-info-content text-white">
        {{ session('status') }}, Sign in to Countinue!
    </div>
    @endif
    <div class="bg-doctor bg-primary-50 bg-local flex flex-col mx-auto items-center justify-center min-h-screen">
        <div class="w-full max-w-2xl px-3">
            <div class="card bg-base-100 relative shadow-lg border-l-4 border-primary-600">
                <figure>
                    <h2 class="text-center font-semibold text-2xl pt-8">The 36<sup>th</sup> WECOC <br> Weekend Course on
                        Cardiology</h2>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Register</h2>
                    <a wire:navigate href="/" class="absolute top-5 right-5 font-semibold  btn btn-circle btn-ghost text-primary-600"><i
                            class="fa-solid fa-home"></i></a>
                    <form wire:navigate wire:submit="create">
                        {{ $this->form }}
                        <div class="card-actions justify-end">
                            <button type="submit"
                                class="btn bg-primary-700 text-white hover:bg-primary-600 mt-5 w-full">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="divider">OR</div>
            <p class="text-center">Already Have Account? <a wire:navigate href="/signin"
                    class="link link-hover link-primary">Sign in</a> </p>
        </div>
    </div>
</div>