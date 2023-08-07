<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="">
        @unless (count($items) == 0)
            {{-- @foreach ($items as $item) --}}
            <livewire:itemlist />
            {{-- @endforeach --}}
            {{-- @else
            <p>no products found</p> --}}
        @endunless
    </div>
    {{-- <div class="mt-6 p-4">{{ $items->links() }}</div> --}}

</x-layout>
