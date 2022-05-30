<x-layouts.dashboard :title="__('Active Orders List')">
    <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
        <div class="flex flex-col flex-wrap sm:flex-row">
            @foreach ($orders as $order)
            <div class="w-full">
                <div class="mb-4">
                    <div class="shadow-lg rounded-2xl p-4 bg-white w-full">
                        <div class="ml-4">
                            <div>
                                <span>
                                    Order by <strong>{{ $order->name }}</strong>
                                </span>
                            </div>
                            <hr>
                            <div class="my-4 w-full">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                                Menu Name
                                            </th>
                                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                                Price
                                            </th>
                                            <th scope="col" class="font-semibold px-3 py-3 border-b border-gray-100 text-gray-800 text-left text-sm">
                                                Amount
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
                                        @foreach ($order->order_product as $order_product)
                                        @php
                                            $totalPrice += $order_product->product->price * $order_product->jumlah;
                                        @endphp
                                        <tr>
                                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $order_product->product->name }}
                                                </p>
                                            </td>
                                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Rp {{ number_format($order_product->product->price,2,",",".") }}
                                                </p>
                                            </td>
                                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $order_product->jumlah }}
                                                </p>
                                            </td>
                                            <td class="px-3 py-3 border-b border-gray-100 text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Rp {{ number_format($order_product->product->price * $order_product->jumlah,2,",",".") }}
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
                            </div>
                            <div class="flex flex-row justify-end gap-2">
                                <div class="py-1 px-2 bg-green-400 hover:bg-green-500 focus:ring-green-300 focus:ring-offset-green-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                                    Complete Order
                                </div>
                                <div class="py-1 px-2 bg-red-400 hover:bg-red-500 focus:ring-red-300 focus:ring-offset-red-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg cursor-pointer">
                                    Cancel Order
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layouts.dashboard>