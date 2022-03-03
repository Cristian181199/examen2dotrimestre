<x-contenido>
    <x-slot name="cabecera">
        Loco
    </x-slot>
    <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
        <h1 class="mb-2 pt-3 font-semibold text-2xl">Monograph data:</h1>
        <h3 class="border-t mb-2 pt-3 font-semibold">Title: <span class="font-thin">{{ $monograph->title }}</span></p>
        <h3 class="border-t mb-2 pt-3 font-semibold">Year: <span class="font-thin">{{ $monograph->year }}</span></p>
    </div>
    <div>
        <p>Authors who have participated in the monograph</p>
        @foreach ($monograph->articles as $articles)
            @foreach ($articles->authors as $author)
                <p>{{ $author->name}}</p>
            @endforeach
        @endforeach
    </div>
    <div class="flex justify-end space-x-2 pt-3">
        <a href="{{ route('monographs.index') }}" class="bg-red-500 hover:bg-red-400 transition-colors rounded-[8px] px-[15px] py-[4px] text-white focus:ring-2 ring-red-500">Return</a>
    </div>
</x-contenido>
