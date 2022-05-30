@props(['id' => '', 'bgimage' => '', 'title' => '', 'description' => ''])

<div class="w-full">
    <div class="mb-4">
        <div class="shadow-lg rounded-2xl p-4 bg-white w-full">
            <div class="flex">
                <div class="w-1/4">
                    <div class="font-bold bg-slate-500 rounded-md bg-cover bg-center" style="padding-top: 60%; background-image: url('/images/{{ $bgimage }}')">
                    </div>
                </div>
                <div class="flex flex-col ml-4 w-3/4">
                    <div class="mb-2 font-bold text-xl">
                        {{ $title }}
                    </div>
                    <div class="mb-4 flex-1">
                        {{ $description }}
                    </div>
                    <div class="flex flex-row justify-end gap-2">
                        <a href="{{ route('adminEditMenu', ['id' => $id]) }}">
                            <div class="py-1 px-4 bg-orange-400 hover:bg-orange-500 focus:ring-orange-300 focus:ring-offset-orange-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                                Edit
                            </div>
                        </a>
                        
                        <form method="POST" action="{{ route('adminDeleteMenu', ['id' => $id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-1 px-4 bg-red-400 hover:bg-red-500 focus:ring-red-300 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>