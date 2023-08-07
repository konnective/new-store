@if ($cartcount == 0)
    <p>no items in your cart</p>
@else
    <div class="container p-8 mx-auto mt-12 bg-white">
        <div class="w-full overflow-x-auto">
            <div class="my-2">
                <h3 class="text-xl font-bold tracking-wider">number Items are {{ $cartcount }}</h3>
            </div>
            <table class="w-full shadow-inner">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 font-bold whitespace-nowrap">Product</th>
                        <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
                        <th class="px-6 py-3 font-bold whitespace-nowrap">Price</th>
                        <th class="px-6 py-3 font-bold whitespace-nowrap">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartitems as $pro)
                        <tr>
                            <td class="p-4 px-6 text-center whitespace-nowrap">{{ $pro->item->title }}</td>
                            <td class="p-4 px-6 text-center whitespace-nowrap">
                                <div>
                                    <button class="px-2 py-0 shadow" wire:click="dec({{ $pro->id }})">-</button>
                                    <input type="text" name="qty" value={{ $pro->quantity }}
                                        class="w-12 text-center bg-gray-100 outline-none" />
                                    <button class="px-2 py-0 shadow" wire:click="inc({{ $pro->id }})">+</button>
                                </div>
                            </td>
                            <td class="p-4 px-6 text-center whitespace-nowrap">
                                ${{ $pro->item->price * $pro->quantity }}
                            </td>
                            <td class="p-4 px-6 text-center whitespace-nowrap">
                                <button class="px-2 py-0 text-red-100 bg-red-600 rounded"
                                    wire:click="removecart({{ $pro->id }})">
                                    x
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="p-4 px-6 text-center whitespace-nowrap"></td>
                        <td class="p-4 px-6 text-center whitespace-nowrap">
                            <div class="font-bold">Total Qty - {{ $cartcount }}</div>
                        </td>
                        <td class="p-4 px-6 font-extrabold text-center whitespace-nowrap">
                            Total - {{ $total }} (include tax)
                        </td>
                        <td class="p-4 px-6 text-center whitespace-nowrap">
                            {{-- <button class="px-4 py-1 text-red-600 bg-red-100">
                                Clear All
                            </button> --}}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-end mt-4 space-x-2">
                <button
                    class="
                px-6
                py-3
                text-sm text-gray-800
                bg-gray-200
                hover:bg-gray-400
                ">
                    Cancel
                </button>

                <form method="post" action="/payment/{{ $total }}">
                    @csrf
                    @method('POST')
                    <button
                        class="
                        px-6
                        py-3
                        text-sm text-white
                        bg-indigo-500
                        hover:bg-indigo-600
                        
                        
                        ">
                        Proceed to Checkout
                    </button>
                </form>

            </div>
        </div>
    </div>

@endif
