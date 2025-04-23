<div>
    <div class="items-center justify-center flex flex-col mb-2">
        <h2 class="capitalize">{{ \Carbon\Carbon::create($year, $month, 1)->locale('et')->isoFormat('MMMM YYYY') }}</h2>
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