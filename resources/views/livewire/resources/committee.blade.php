<div>
    <div class="flex flex-col items-center">
        @foreach ($uniqueCategories as $category)
        <div class="badge bg-primary-900 text-white py-5 px-10 text-lg font-semibold my-10">{{ $category }}</div>
        <div class="flex flex-col md:flex-row justify-center items-start flex-wrap gap-4">
            @foreach ($committees as $committee)
            @if ($committee->category == $category)
            <div class="">
                <div class="card md:w-80 lg:w-96 w-full bg-base-100 shadow-xl">
                    <figure>
                        @if($committee->getMedia('committee')->isEmpty())
                        <div class="avatar">
                            <div class="rounded-lg">
                                <img src="{{ asset('images/doctor.png') }}" alt="Default Doctor Image"
                                    class="rounded-lg" />
                            </div>
                        </div>
                        @else
                        @foreach($committee->getMedia('committee') as $image)
                        <div class="avatar px-3">
                            <div class="rounded-full ring ring-primary ring-offset-base-100 ring-offset-4">
                                <img src="{{ $image->getUrl() }}" alt="{{$committee->name}}" />
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="text-xl font-semibold">
                            {{$committee->name}}
                        </h2>
                        <p class="text-lg text-gray-400">
                            {{$committee->title}}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>