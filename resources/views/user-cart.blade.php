<x-layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('navigation.user_cart') }}
        </h2>
    </x-slot>

    @if (sizeof($carts) > 0)
    <div class="container py-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="p-4 bg-white inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                {{ __('keranjang.name') }}
                            </th>
                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                {{ __('keranjang.price') }}
                            </th>
                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                {{ __('keranjang.amount') }}
                            </th>
                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                Subtotal
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $totalPrice = 0;
                        @endphp
                        @foreach ($carts as $cart)
                        @php
                            $totalPrice += $cart->product->price * $cart->jumlah;
                        @endphp
                        <tr>
                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $cart->product->name }}
                                </p>
                            </td>
                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Rp {{ number_format($cart->product->price,2,",",".") }}
                                </p>
                            </td>
                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $cart->jumlah }}
                                </p>
                            </td>
                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Rp {{ number_format($cart->product->price * $cart->jumlah,2,",",".") }}
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="col" class="px-3 py-3 border-t-2 border-gray-100 text-gray-800 text-left text-sm font-semibold">
                            </th>
                            <th scope="col" class="px-3 py-3 border-t-2 border-gray-100 text-gray-800 text-left text-sm font-semibold">
                            </th>
                            <th scope="col" class="px-3 py-3 border-t-2 border-gray-100 text-gray-800 text-right text-sm font-semibold">
                                Total
                            </th>
                            <th scope="col" class="px-3 py-3 border-t-2 border-gray-100 text-gray-800 text-left text-sm font-semibold">
                                Rp {{ number_format($totalPrice,2,",",".") }}
                            </th>
                        </tr>
                    </tfoot>
                </table>
                <div class="flex pt-4">
                    <div class="ml-auto">
                        <button class="py-1 px-4 mr-1 bg-red-500 hover:bg-red-600 focus:ring-red-500 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                            {{ __('keranjang.cancel') }}
                        </button>
                        <a href="{{ route("userOrderStore") }}" class="py-1 px-4 ml-1 bg-green-500 hover:bg-green-600 focus:ring-green-500 focus:ring-offset-green-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="w-full flex justify-center items-center flex-1 py-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div>
            <div class="text-lg font-semibold">
                {{ __('keranjang.empty') }}
            </div>
            <div class="mt-6 flex justify-center">
                <a href="{{ route("userMenu") }}" class="py-1 px-4 bg-sky-300 hover:bg-sky-400 focus:ring-sky-300 focus:ring-offset-sky-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                    {{ __('keranjang.order') }}
                </a>
            </div>
        </div>
    </div>
    @endif
</x-layouts.app>