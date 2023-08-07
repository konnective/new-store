@props(['item'])

<table class="w-full table-auto rounded-sm">
    <tbody>
        <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="">
                    {{ $item->title }}
                </a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <a href="/listings/{{ $item->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                        class="fa-solid fa-pen-to-square"></i>
                    Edit</a>
            </td>
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                <form action="">
                    <button class="text-red-600">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </button>
                </form>
            </td>
        </tr>


    </tbody>
</table>
