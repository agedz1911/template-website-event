<div>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($faculties as $faculty)
        <div class="card glass">
            <figure class="">
                @if($faculty->getMedia('images')->isEmpty())
                <div class="avatar p-3">
                    <div class="rounded-full ring ring-primary  ring-offset-base-100 ring-offset-4">
                        <img src="{{ asset('images/doctor.png') }}" alt="Default Doctor Image" class="rounded-lg" />
                    </div>
                </div>
                @else
                @foreach($faculty->getMedia('images') as $image)
                <div class="avatar p-3">
                    <div class="rounded-full ring ring-primary  ring-offset-base-100 ring-offset-4">
                        <img src="{{ $image->getUrl() }}" alt="{{$faculty->name}}" />
                    </div>
                </div>
                @endforeach
                @endif
            </figure>
            <div class="card-body">
                <h2 class="card-title text-primary-800 hover:cursor-pointer">
                    {{$faculty->name}}
                </h2>
                <p class="">{{$faculty->country}}</p>
            </div>
        </div>
        @endforeach

    </div>
</div>