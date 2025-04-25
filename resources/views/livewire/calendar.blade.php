<div>
    <div class="items-center justify-center mb-2 flex-row gap-2 flex">
        <div class="flex items-center justify-center">
            @if ($monthOffset > 0)
            <x-coolicon-caret-right-sm
                class="w-7 h-7 text-lime-500 hover:text-lime-700 transform -scale-x-100"
                wire:click="previousMonth" />
            @else
            <x-coolicon-caret-right-sm
                class="w-7 h-7 text-gray-300 transform -scale-x-100" disabled />
            @endif
        </div>
        <div class="pointer-events-none">
            <h2 class="capitalize font-semibold">{{ \Carbon\Carbon::create($year, $month, 1)->locale('et')->isoFormat('MMMM YYYY') }}</h2>
        </div>
        <div class="flex items-center justify-center">
            @if ($monthOffset
            < 2)
                <x-coolicon-caret-right-sm
                class="w-7 h-7 text-lime-500 hover:text-lime-700"
                wire:click="nextMonth" />
            @else
            <x-coolicon-caret-right-sm
                class="w-7 h-7 text-gray-300" disabled />
            @endif
        </div>
    </div>
    <div>
        <table>
            <thead class="text-rose-700">
                <tr>
                    <th>P</th>
                    <th>E</th>
                    <th>T</th>
                    <th>K</th>
                    <th>N</th>
                    <th>R</th>
                    <th>L</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($calendar as $week)
                <tr>
                    @foreach ($week as $day)
                    <td
                        wire:click="getEventsForDate('{{ $day['date'] }}') && isAc"
                        class="
                    no-pointer-event select-none p-2 text-center w-10 h-10
                    {{ !$day['currentMonth'] ? 'text-gray-400' : '' }}
                    {{ $day['hasEvent'] 
                    ? ($selectedDate === $day['date'] ? 'bg-rose-400 font-bold rounded-full' : 'rounded-full pointer-event bg-rose-300 hover:bg-rose-400 cursor-pointer transition-colors duration-200') 
                    : '' }}
                ">
                        {{ $day['day'] }}
                    </td>

                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>