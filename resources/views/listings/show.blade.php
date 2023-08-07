<x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{ asset('images/no-image.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $item->title }}</h3>
                <div class="text-xl font-bold mb-4">${{ $item->price }}</div>
                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Laravel</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">API</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Backend</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Vue</a>
                    </li>
                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> Daytona, FL
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $item->description }}
                        </p>
                        {{-- <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Quaerat praesentium eos
                            consequuntur ex voluptatum necessitatibus
                            odio quos cupiditate iste similique rem in,
                            voluptates quod maxime animi veritatis illum
                            quo sapiente.
                        </p> --}}

                        <a href="mailto:test@test.com"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="https://test.com" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i> Visit
                            Website</a>
                    </div>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-6 flex space-x-6">
            <a href="/listings/{{ $item->id }}/edit">Edit</a>
            <form method="POST" action="/listings/{{ $item->id }}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash">DELETE</i></button>
            </form>
        </x-card>
    </div>
</x-layout>
