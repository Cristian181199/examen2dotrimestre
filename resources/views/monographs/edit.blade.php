<x-contenido>
    <x-slot name="cabecera">
        Edit monograph
    </x-slot>
    <form action="{{ route('monographs.update', [$monograph], false) }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">EDIT MONOGRAPH</h1>
        <div class="space-y-4">
            <div>
                <label for="title" class="text-xl">Title:</label>
                <input type="text" placeholder="title" name="title" id="title" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('title') border-red-500 @enderror" value="{{ old('title', $monograph->title) }}"/>
                @error('title')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="year" class="text-xl">Year:</label>
                <input type="text" placeholder="1968" name="year" id="year" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('year') border-red-500 @enderror" value="{{ old('year', $monograph->year) }}"/>
                @error('year')
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button type="submit" class=" px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">Edit monograph</button>
        </div>
        <div>
            <a href="{{ route('monographs.index') }}" class="bg-red-500 hover:bg-red-400 transition-colors rounded-[8px] px-[15px] py-[4px] text-white focus:ring-2 ring-red-500">Return</a>
        </div>
    </form>
</x-contenido>
