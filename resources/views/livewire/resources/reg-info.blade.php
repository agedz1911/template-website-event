<div>
    <div class="bg-white border border-gray-200 divide-y divide-gray-200 rounded-lg">
        @foreach ($regInfomations as $regInfomation)
        <details class="p-6 group " {{ $loop->first ? 'open' : '' }}    >
            <summary class="flex items-center justify-between cursor-pointer">
                <h5 class="text-xl font-semibold text-primary-900">
                    {{$regInfomation->title}}
                </h5>
                <span class="relative flex-shrink-0 ml-1.5 w-5 h-5">
                    <i class="fa-solid fa-eye absolute inset-0 w-5 h-5 opacity-0 group-open:opacity-100"></i>
                    <i class="fa-solid fa-eye-slash absolute inset-0 w-5 h-5 opacity-100 group-open:opacity-0"></i>
                </span>
            </summary>

            <p class="mt-4 leading-relaxed text-slate-500">
                {{$regInfomation->description}}
            </p>
        </details>
        @endforeach
    </div>
</div>