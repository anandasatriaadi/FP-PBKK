@props(['status' => 1, 'table' => "", 'date' => "", 'name' => "", 'id' => ""])

<div class="w-full sm:w-1/2 lg:w-1/3 p-2">
    <div class="shadow-lg rounded-2xl p-4 bg-white w-full">
        <div class="mb-4">
            <div class="font-bold">
                Table No.
            </div>
            <div class="text-center font-bold text-3xl">
                {{ $table }}
            </div>
            <div>
                <span>
                    Reserved for
                </span>
                <span class="font-bold">
                    {{ date('d/m/Y', strtotime($date)) }}
                </span>
                <span>
                    by
                </span>
                <span class="font-bold">
                    {{ $name }}
                </span>
            </div>
        </div>
        @if ($status == 1)
        <div class="flex flex-row gap-2">
            <form class="flex-1" method="POST" action="{{route('staffCompleteReservation')}}">
                @csrf
                <input class="hidden" type="text" name="id" value="{{ $id }}">
                <button type="submit" class="py-1 px-2 w-full bg-green-400 hover:bg-green-500 focus:ring-green-300 focus:ring-offset-green-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                    Complete
                </button>
            </form>
            <form class="flex-1" method="POST" action="{{route('staffCompleteReservation')}}">
                @csrf
                <input class="hidden" type="text" name="id" value="{{ $id }}">
                <button type="submit" class="py-1 px-2 w-full bg-red-400 hover:bg-red-500 focus:ring-red-300 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                    Cancel
                </button>
            </form>
        </div>
        @else
        <div class="flex flex-row gap-2">
            <div class="py-1 px-2 flex-1 bg-slate-400 text-white text-center text-base font-semibold shadow-md rounded-lg">
                Completed
            </div>
        </div>
        @endif
    </div>
</div>