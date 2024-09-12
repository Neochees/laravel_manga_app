<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="p-6 bg-gray-100 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $manga->title }}</h2>
            <h5 class="text-lg text-gray-600">{{ $manga->author }}</h5>
            <h6 class="text-sm font-medium text-gray-500">{{ $manga->genre }}</h6>
            <h6 class="text-sm font-medium text-yellow-500">Rating: {{ $manga->rating }}/10</h6>
            <p class="text-base text-gray-700 mt-4">{{ $manga->description }}</p>

            <a href="/manga/{{ $manga->id }}/edit" class="rounded-xl border border-green-500 text-white bg-green-500 py-2 px-4 hover:bg-white hover:text-green-500"><button class="mt-10">
                    Edit
                </button></a>
            <a href="/" class="rounded-xl border border-green-500 text-green-500 bg-white py-2 px-4 hover:bg-green-500 hover:text-white mt-2"><button class="mt-10">
                    Back
                </button></a>
        </section>
    </main>
</x-layout>
