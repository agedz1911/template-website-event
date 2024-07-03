<div>
    <div class="flex flex-col gap-3">
        {{-- {{ $this->welcomeMessage }} --}}

        @foreach ($messages as $message)
        {!! $message->description !!}

        @foreach($message->getMedia('welcomeMessage') as $image)
        <img class="float-left rounded-lg ring ring-primary ring-offset-base-100 ring-offset-4 w-40 m-3"
            src="{{ $image->getUrl() }}" alt="{{$message->name}}" />
        @endforeach
        
        <div>
            <p class="font-semibold underline">{{$message->name}}</p>
            <p class="text-xs font-semibold">{{$message->title}}
            </p>
        </div>
        @endforeach
    </div>
</div>