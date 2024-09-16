<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @foreach($mangas as $manga)
            <x-manga-card :manga="$manga" />

        @endforeach
        <a href="/manga/create"><button class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500">Create+</button></a>
        <a href="/genre" class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500"><button>Genres</button></a>
    </main>
</x-layout>
