<div>

    <div class="flex items-center justify-center">
        <div x-data="{ openTab: 1 }" class="lg:w-3/4 w-full mx-auto">
            <div class="">
                <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                    <button x-on:click="openTab = 1" :class="{ 'bg-primary-600 text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">26
                        October</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-primary-600 text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">27
                        October</button>
                    <button x-on:click="openTab = 3" :class="{ 'bg-primary-600 text-white': openTab === 3 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">28
                        October</button>
                </div>

                <div x-show="openTab === 1"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    @foreach ($sesis->where('date', '2024-10-26') as $sesi)
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800 ">
                                    <th class="w-1/12">{{
                                        \Carbon\Carbon::parse($sesi->timeStart)->format('H.i') }} - {{
                                        \Carbon\Carbon::parse($sesi->timeEnd)->format('H.i') }}</th>
                                    <th colspan="3">{{ $sesi->session }} <br> Room: {{
                                        $sesi->room }} <br>
                                        Moderator: {{ $sesi->moderator->name }} ({{ $sesi->moderator->country }})
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-base-200">
                                    <th>Time</th>
                                    <td>Topic</td>
                                    <td>Speaker</td>
                                    <td>Country</td>
                                </tr>
                                @foreach ($sesi->schedule as $schedule)
                                <tr>
                                    <th>{{\Carbon\Carbon::parse($schedule->timeStart)->format('H.i')}} -
                                        {{\Carbon\Carbon::parse($schedule->timeEnd)->format('H.i')}}</th>
                                    <td>{{ $schedule->topic }}</td>
                                    <td>{{ $schedule->faculty->name }}</td>
                                    <td>{{ $schedule->faculty->country }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach

                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    @foreach ($sesis->where('date', '2024-10-27') as $sesi)
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800">
                                    <th class="w-1/12">{{
                                        \Carbon\Carbon::parse($sesi->timeStart)->format('H.i') }} - {{
                                        \Carbon\Carbon::parse($sesi->timeEnd)->format('H.i') }}</th>
                                    <th colspan="3">{{ $sesi->session }} <br> Room: {{
                                        $sesi->room }} <br>
                                        Moderator: {{ $sesi->moderator->name }} ({{ $sesi->moderator->country }})
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-base-200">
                                    <th>Time</th>
                                    <td>Topic</td>
                                    <td>Speaker</td>
                                    <td>Country</td>
                                </tr>
                                @foreach ($sesi->schedule as $schedule)
                                <tr>
                                    <th>{{\Carbon\Carbon::parse($schedule->timeStart)->format('H.i')}} -
                                        {{\Carbon\Carbon::parse($schedule->timeEnd)->format('H.i')}}</th>
                                    <td>{{ $schedule->topic }}</td>
                                    <td>{{ $schedule->faculty->name }}</td>
                                    <td>{{ $schedule->faculty->country }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>

                <div x-show="openTab === 3"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                    @foreach ($sesis->where('date', '2024-10-28') as $sesi)
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr class="text-base font-semibold mb-2 text-primary-800">
                                    <th class="w-1/12">{{
                                        \Carbon\Carbon::parse($sesi->timeStart)->format('H.i') }} - {{
                                        \Carbon\Carbon::parse($sesi->timeEnd)->format('H.i') }}</th>
                                    <th colspan="3">{{ $sesi->session }} <br> Room: {{
                                        $sesi->room }} <br>
                                        Moderator: {{ $sesi->moderator->name }} ({{ $sesi->moderator->country }})
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-base-200">
                                    <th>Time</th>
                                    <td>Topic</td>
                                    <td>Speaker</td>
                                    <td>Country</td>
                                </tr>
                                @foreach ($sesi->schedule as $schedule)
                                <tr>
                                    <th>{{\Carbon\Carbon::parse($schedule->timeStart)->format('H.i')}} -
                                        {{\Carbon\Carbon::parse($schedule->timeEnd)->format('H.i')}}</th>
                                    <td>{{ $schedule->topic }}</td>
                                    <td>{{ $schedule->faculty->name }}</td>
                                    <td>{{ $schedule->faculty->country }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="items-center justify-center">
    <div x-data="{ openTab: 1 }" class="p-5">
        <div class="lg:w-3/4 w-full mx-auto">
            <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                @foreach ($sesis as $sesi)
                <button x-on:click="openTab = {{$loop->iteration}}"
                    :class="{ 'bg-primary-600 text-white': openTab === {{$loop->iteration}} }"
                    class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">
                    {{\Carbon\Carbon::parse($sesi->date)->format('d F')}}</button>
                @endforeach

            </div>
            @foreach($sesis as $sesi)
            <div x-show="openTab === {{ $loop->iteration }}"
                class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                <div class="overflow-x-auto">
                    <table class="table">

                        <thead>
                            <tr class="text-base font-semibold mb-2 text-primary-800">
                                <th class="w-1/12">{{
                                    \Carbon\Carbon::parse($sesi->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($sesi->timeEnd)->format('H.i') }}</th>
                                <th colspan="3">{{ $sesi->session }} <br> Room: {{
                                    $sesi->room }} <br>
                                    Moderator: {{ $sesi->moderator->name }} ({{ $sesi->moderator->country }})
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-100 font-semibold">
                                <th>Time</th>
                                <td>Topics</td>
                                <td>Speaker</td>
                                <td>Country</td>
                            </tr>

                            @foreach($sesi->schedule as $schedule)
                            <tr>
                                <th>{{ \Carbon\Carbon::parse($schedule->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($schedule->timeEnd)->format('H.i') }}</th>
                                <td>{{ $schedule->topic }}</td>
                                <td>{{ $schedule->faculty->name }}</td>
                                <td>{{ $schedule->faculty->country }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div> --}}
{{-- <div class="items-center justify-center">
    <div x-data="{ openTab: 1 }" class="p-5">
        <div class="lg:w-3/4 w-full mx-auto">
            <div class="mb-4 flex space-x-4 p-2 bg-white rounded-lg shadow-md">
                @foreach($schedules->pluck('session')->unique('date')->sortBy('date') as $session)
                <button x-on:click="openTab = {{$loop->iteration}}"
                    :class="{ 'bg-primary-600 text-white': openTab === {{$loop->iteration}} }"
                    class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-primary transition-all duration-300">
                    {{\Carbon\Carbon::parse($session->date)->format('d F')}}</button>
                @endforeach

            </div>
            @foreach($schedules->pluck('session')->unique('date')->sortBy('date') as $session)
            <div x-show="openTab === {{ $loop->iteration }}"
                class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-x-4 border-primary">
                <div class="overflow-x-auto">
                    <table class="table">

                        <thead>
                            <tr class="text-base font-semibold mb-2 text-primary-800">
                                <th class="w-1/12">{{
                                    \Carbon\Carbon::parse($session->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($session->timeEnd)->format('H.i') }}</th>
                                <th colspan="3">{{ $session->session }} <br> Room: {{
                                    $session->room }} <br>
                                    Moderator: {{ $session->moderator->name }} ({{ $session->moderator->country }})
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-100 font-semibold">
                                <th>Time</th>
                                <td>Topics</td>
                                <td>Speaker</td>
                                <td>Country</td>
                            </tr>

                            @foreach($session->schedule as $schedule)
                            <tr>
                                <th>{{ \Carbon\Carbon::parse($schedule->timeStart)->format('H.i') }} - {{
                                    \Carbon\Carbon::parse($schedule->timeEnd)->format('H.i') }}</th>
                                <td>{{ $schedule->topic }}</td>
                                <td>{{ $schedule->faculty->name }}</td>
                                <td>{{ $schedule->faculty->country }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div> --}}