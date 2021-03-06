<x-contenido>
    <x-slot name="cabecera">
        Show
    </x-slot>
    <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
        <h1 class="mb-2 pt-3 font-semibold text-2xl">Monograph data:</h1>

        <h3 class="border-t mb-2 pt-3 font-semibold">Title: <span class="font-thin">{{ $monographwitharticles[0]->title }}</span></p>
        <h3 class="border-t mb-2 pt-3 font-semibold">Year: <span class="font-thin">{{ $monographwitharticles[0]->year }}</span></p>
    </div>
    @if ($monographwitharticles[0]->articles->count() === 0)
        <div>
            <p class=" mb-2 pt-3 font-semibold text-2xl">This monograph has no articles.</p>
        </div>
    @else
        <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
            <p class=" mb-2 pt-3 font-semibold text-2xl">Articles that make up the monograph</p>
            @foreach ($monographwitharticles[0]->articles as $article)
                <h3 class="border-t mb-2 pt-3 font-semibold">Title of article: <span class="font-thin">{{ $article->title }}</span></p>
            @endforeach
            <h3 class="border-t mb-2 pt-3 font-semibold">Sum of the number of pages of all your articles: <span class="font-thin">{{ $monographwitharticles[0]->articles_sum_number_pages }}</span></p>
        </div>
    @endif
    <div class="flex justify-end space-x-2 pt-3">
        <a href="{{ route('monographs.index') }}" class="bg-red-500 hover:bg-red-400 transition-colors rounded-[8px] px-[15px] py-[4px] text-white focus:ring-2 ring-red-500">Return</a>
    </div>
</x-contenido>
