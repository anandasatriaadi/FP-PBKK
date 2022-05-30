@props(['id' => '', 'bgimage' => '', 'title' => '', 'price' => ''])

<div class="w-1/4 p-2">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="font-bold bg-slate-500 bg-cover bg-center" style="padding-top: 60%; background-image: url('/images/{{ $bgimage }}')">
        </div>
        <div class="p-4">
            <div class="font-bold text-xl">
                {{ $title }}
            </div>
            <div>
                Rp {{ number_format("$price",2,",",".") }}
            </div>
            <a href="{{ route("userAddToCart", ['id' => $id]) }}" class="flex font-bold pt-2">
                <div class="py-1 px-2 flex-1 bg-sky-300 hover:bg-sky-400 focus:ring-sky-500 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                    Add to Cart
                </div>
            </a>
        </div>
    </div>
</div>