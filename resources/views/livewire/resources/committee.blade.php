<div>
    <div class="flex flex-col items-center">
        @foreach ($uniqueCategories as $category)
        <div class="badge badge-primary py-4 px-6 my-10">{{ $category }}</div>
        <div class="grid grid-cols-5 gap-4 ">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="card w- bg-base-100 shadow-xl">
                <figure>
                    @if($committee->getMedia('committee')->isEmpty())
                    <div class="avatar">
                        <div class="rounded-lg">
                            <img src="{{ asset('images/doctor.png') }}" alt="Default Doctor Image" class="rounded-lg" />
                        </div>
                    </div>
                    @else
                    @foreach($committee->getMedia('committee') as $image)
                    <div class="avatar px-0 pt-2">
                        <div class="rounded-lg">
                            <img src="{{ $image->getUrl() }}" alt="{{$committee->name}}" />
                        </div>
                    </div>
                    @endforeach
                    @endif
                </figure>
                <div class="card-body text-center">
                    <h2 class="text-2xl font-semibold">
                        {{$committee->name}}
                    </h2>
                    <p class="text-gray-400">
                        {{$committee->title}}
                    </p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>