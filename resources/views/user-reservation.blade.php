<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservation') }}
        </h2>
    </x-slot>

    <div class="pt-6 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @auth
                <p>
                    Hi <strong>{{ Auth::user()->name }}</strong>!
                </p>
                <p>
                    Please fill in this form to complete your reservation.
                </p>
                @endauth
            </div>
        </div>
    </div>
    <div class="py-6 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="pb-6 text-2xl font-bold text-center">
                    Reservation Form
                </div>
                <form method="POST" action="{{route('userReservationStore')}}">
                    @csrf
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-name" class="text-gray-700">
                            Name
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="text" id="required-name" name="name" placeholder="Michael Alexander" required class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent transition ease-in-out duration-200"/>
                    </div>
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-email" class="text-gray-700">
                            Email
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="email" id="required-email" name="email" placeholder="alexander@email.com" required class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent transition ease-in-out duration-200"/>
                    </div>
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-phone" class="text-gray-700">
                            Phone Number
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="text" id="required-phone" name="phone" placeholder="081 111 111 222" required class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent transition ease-in-out duration-200"/>
                    </div>
                    <div class="w-full md:w-1/2 mx-auto">
                        <label class="text-gray-700" for="required-table">
                            Table Number
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <select id="required-table" required class="block w-full py-2 px-3 border border-transparent bg-gray-50 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 transition ease-in-out duration-200" name="table">
                            <option value="">
                                Select an option
                            </option>
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">
                                    {{ $table->table_number }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex">
                        <button type="submit" class="mt-4 py-2 px-4 bg-sky-300 hover:bg-sky-400 focus:ring-sky-500 focus:ring-offset-sky-200 text-white w-full md:w-1/2 mx-auto transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>