@props(['manga'])
<section class="p-6 bg-gray-100 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-800">{{ $manga->title }}</h2>
    <h5 class="text-lg text-gray-600">{{ $manga->author }}</h5>
    <a href="/genre/{{ $manga->genre->id }}"><h6 class="text-sm font-medium text-gray-500">{{ $manga->genre->name }}</h6></a>
    <h6 class="text-sm font-medium text-yellow-500">Rating: {{ $manga->rating }}/10</h6>

    <a href="/manga/{{ $manga->id }}" class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500"><button class="mt-10">
            Show
        </button></a>
    <a href="/manga/{{ $manga->id }}/edit" class="rounded-xl border border-green-500 text-white bg-green-500 py-2 px-4 hover:bg-white hover:text-green-500"><button class="mt-10">
            Edit
        </button></a>
    <form method="POST" action="/manga/{{ $manga->id }}" class="inline-block">
        @csrf
        @method('DELETE')
        <a href="/"><button type="submit" class="rounded-xl text-white bg-red-500 py-2 px-4">
                DELETE
            </button></a>
    </form>

</section>
