<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservation') }}
        </h2>
    </x-slot>

    <div class="pt-6">
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
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="pb-6 text-2xl font-bold text-center">
                    Reservation Form
                </div>
                @csrf
                <form>
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-name" class="text-gray-700">
                            Nama
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="text" id="required-name" name="email" placeholder="Michael Alexander" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                    </div>
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-email" class="text-gray-700">
                            Email
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="email" id="required-email" name="email" placeholder="alexander@email.com" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                    </div>
                    <div class="relative pb-4 w-full md:w-1/2 mx-auto">
                        <label for="required-phone" class="text-gray-700">
                            Phone Number
                            <span class="text-red-500 required-dot">
                                *
                            </span>
                        </label>
                        <input type="text" id="required-phone" name="email" placeholder="081 111 111 222" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-gray-50 text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"/>
                    </div>
                    <div class="w-full md:w-1/2 mx-auto">
                        <label class="text-gray-700" for="table">
                            Table Number
                            <select id="table" class="block w-full py-2 px-3 border border-gray-300 bg-gray-50 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500" name="table">
                                <option value="">
                                    Select an option
                                </option>
                                <option value="1">
                                    1
                                </option>
                                <option value="2">
                                    2
                                </option>
                                <option value="3">
                                    3
                                </option>
                                <option value="4">
                                    4
                                </option>
                                <option value="5">
                                    5
                                </option>
                                <option value="6">
                                    6
                                </option>
                            </select>
                        </label>
                    </div>
                    <div class="flex">
                        <button type="submit" class="mt-4 py-2 px-4 bg-sky-600 hover:bg-sky-700 focus:ring-sky-500 focus:ring-offset-sky-200 text-white w-full md:w-1/2 mx-auto transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>