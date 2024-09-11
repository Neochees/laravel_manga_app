<x-layout>

    <section class="p-6 bg-gray-100 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800">{{ $manga->title }}</h2>
    <h5 class="text-lg text-gray-600">{{ $manga->author }}</h5>
    <h6 class="text-sm font-medium text-gray-500">{{ $manga->genre }}</h6>
    <h6 class="text-sm font-medium text-yellow-500">Rating: {{ $manga->rating }}/10</h6>
    <p class="text-base text-gray-700 mt-4">{{ $manga->description }}</p>

    <a href="/" class="rounded-xl text-white bg-green-500 py-2 px-4"><button class="mt-10">
            Edit
        </button></a>
    <a href="/" class="rounded-xl text-white bg-red-500 py-2 px-4"><button class="mt-10">
            Delete
        </button></a>
        <a href="/" class="rounded-xl text-white bg-black py-2 px-4"><button class="mt-10">
                back
            </button></a>
    </section>

</x-layout>
