@props(['status' => false])

<div class="w-full sm:w-1/2 lg:w-1/3 p-2">
    <div class="shadow-lg rounded-2xl p-4 bg-white w-full">
        <div class="mb-4">
            <div class="font-bold">
                Table No.
            </div>
            <div class="text-center font-bold text-3xl">
                2
            </div>
            <div>
                <span>
                    Reserved by:
                </span>
                <span class="font-bold">
                    Ananda Satria
                </span>
            </div>
        </div>
        @if ($status == true)
        <div class="flex flex-row gap-2">
            <div class="py-1 px-2 flex-1 bg-green-600 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg  cursor-pointer">
                Complete
            </div>
            <div class="py-1 px-2 flex-1 bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg  cursor-pointer">
                Cancel
            </div>
        </div>
        @else
        <div class="flex flex-row gap-2">
            <div class="py-1 px-2 flex-1 bg-slate-600 text-white text-center text-base font-semibold shadow-md rounded-lg">
                Completed
            </div>
        </div>
        @endif
    </div>
</div>