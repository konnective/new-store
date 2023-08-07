<x-layout>
    @include('partials._search')
    {{-- <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"> --}}
    <div class="mx-auto bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Products
            </h1>
        </header>
        @unless (count($items) == 0)
            <div class="container p-8 mx-auto mt-12 bg-white">
                <div class="w-full overflow-x-auto">
                    <div class="my-2">
                        {{-- <h3 class="text-xl font-bold tracking-wider">number Items are</h3> --}}
                    </div>
                    <table class="w-full shadow-inner">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-3 font-bold whitespace-nowrap">Product</th>
                                <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
                                <th class="px-6 py-3 font-bold whitespace-nowrap">Price</th>
                                <th class="px-6 py-3 font-bold whitespace-nowrap">Remove</th>
                                <th class="px-6 py-3 font-bold whitespace-nowrap">edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $pro)
                                <tr>
                                    <td class="p-4 px-6 text-center whitespace-nowrap">{{ $pro->title }}</td>
                                    <td class="p-4 px-6 text-center whitespace-nowrap">
                                        <div>

                                        </div>
                                    </td>
                                    <td class="p-4 px-6 text-center whitespace-nowrap">
                                        ${{ $pro->price }}
                                    </td>
                                    <td class="p-4 px-6 text-center whitespace-nowrap">
                                        <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                                            x
                                        </button>
                                    </td>
                                    <td class="p-4 px-6 text-center whitespace-nowrap">
                                        <a href="/listings/{{ $pro->id }}/edit">
                                            <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex justify-end mt-4 space-x-2">
                        <a href="/listings/create">

                            <button
                                class="
                            px-6
                            py-3
                            text-sm text-white
                            bg-indigo-500
                            hover:bg-indigo-600
                            
                            
                            ">
                                Create New Product
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>no products found,,</p>
    @endunless
    {{-- </div> --}}
    </div>
    <div class="mt-6 p-4">{{ $items->links() }}</div>

</x-layout>
