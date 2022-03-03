<x-contenido>
    <x-slot name="cabecera">
        Articles
    </x-slot>

    <table>
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Article
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Number of authors
                </th>
                <th class="px-6 py-2 text-xs text-gray-500">
                    Number of monographs
                </th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($articles as $article)
                <tr class="whitespace-nowrap">

                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                                {{ $article->title }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            @if ($article->authors_count === 0)
                                <p>This article has no related authors</p>
                            @else
                            {{ $article->authors_count }}
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            @if ($article->monographs_count === 0)
                                <p>This article has no related monographs</p>
                            @else
                            {{ $article->monographs_count }}
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-contenido>
