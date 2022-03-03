<x-contenido>
    <x-slot name="cabecera">
        Monografias
    </x-slot>
    <x-success-message/>
    <x-error-message/>

    <div>
        <table>
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Title
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Year
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($monographs as $monograph)
                    <tr class="whitespace-nowrap">

                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <a class="hover:text-blue-600" href="{{ route('monographs.show', $monograph) }}">
                                    {{ $monograph->title }}
                                </a>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                {{ $monograph->year }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <a href="{{ route('monographs.edit', $monograph) }}" class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-amber-600 rounded border border-amber-700 text-amber-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-amber-700">Edit</a>
                            </div>
                            <div class="text-sm text-gray-900">
                                <form action="{{ route('monographs.destroy', $monograph) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-red-600 rounded border border-red-700 text-red-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-red-700">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pt-4">
        <a class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-6 py-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-700" href="{{ route('monographs.create') }}">Create monograph</a>
    </div>
</x-contenido>
