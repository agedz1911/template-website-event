<div>

    <div class="flex flex-col justify-center bg-doctor bg-primary-50 bg-local items-center min-h-screen">
        <div class="w-full max-w-xl px-3">
            @if (Session::has('error'))
            <div role="alert" class="alert bg-red-500 text-white items-center">
                <i class="fa-regular fa-circle-xmark"></i>
                {{ Session::get('error') }}
            </div>
            @endif
            <div class="card bg-base-100 mt-3 shadow-lg border-l-4 border-primary-600">
                <figure>
                    <h2 class="text-center font-semibold text-2xl pt-8">The 36<sup>th</sup> WECOC <br> Weekend Course on Cardiology</h2>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Sign in</h2>
                    <a wire:navigate href="/" class="absolute top-3 right-4 font-semibold btn btn-circle btn-ghost text-primary-600"><i class="fa-solid fa-home"></i></a>
                    <form wire:submit="authenticate">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Email</span>
                            </div>
                            <input type="email" wire:model="email" placeholder="John@example.com" class="input input-bordered rounded-md w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <input type="password" wire:model="password" placeholder="*******" class="input input-bordered rounded-md w-full" />
                        </label>
                        <div class="card-actions justify-end">
                            <button type="submit" class="btn bg-primary-700 text-white hover:bg-primary-600 mt-5 w-full">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="divider">OR</div>
            <p class="text-center">Dont Have an Account? <a wire:navigate href="/signup" class="link link-hover link-primary">Sign up</a> </p>
        </div>
    </div>
</div>