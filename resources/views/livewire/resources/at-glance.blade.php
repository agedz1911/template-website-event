<div>
    @foreach ($atglances as $atglance)
    <div class="card card-compact w-full bg-slate-50 rounded-lg shadow-xl">
        <figure>
            @if($atglance->getMedia('at_glances')->first())
            <img src="{{ $atglance->getMedia('at_glances')->first()->getUrl() }}" alt="" class="rounded-lg" />
            @endif
        </figure>
        <div class="card-body">
            <div class="card-actions justify-start">
                <button class="btn btn-primary"><i class="fa-regular fa-file-pdf"></i> Download</button>
            </div>
        </div>
    </div>
    @endforeach
</div>