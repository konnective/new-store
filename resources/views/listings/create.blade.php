<x-layout>
    <x-card class="max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Product
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form method="POST" action="/listings">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">product Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    value="{{ old('title') }}" />
            </div>
            @error('title')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label name="price" class="inline-block text-lg mb-2">product price</label>
                <input type='number' class="border border-gray-200 rounded p-2 w-full" name="price"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('price') }}" />
            </div>
            @error('price')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
            {{-- <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">product image</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" />
            </div> --}}

            <div class="mb-6">
                <label name="stock" class="inline-block text-lg mb-2">product stock</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="stock"
                    value="{{ old('stock') }}" />
            </div>
            @error('stock')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="website" name='img' class="inline-block text-lg mb-2">
                    Website/image URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="img"
                    value="{{ old('img') }}" />
            </div>
            @error('img')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            {{-- <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" />
            </div> --}}

            {{-- <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
            </div> --}}

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    product Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="this product is for something use " value="{{ old('description') }}"></textarea>
            </div>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create product
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
