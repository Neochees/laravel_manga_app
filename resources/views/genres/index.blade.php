<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @foreach($genres as $genre)
            <section class="p-6 bg-gray-100 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $genre->name }}</h2>
                <h6 class="text-sm font-medium text-yellow-500">Amount: </h6>
                          {{--How many manga are in this genre--}}

                <a href="/genre/{{ $genre->id }}" class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500"><button class="mt-10">
                        Show
                    </button></a>
                <a href="/genre/{{ $genre->id }}/edit" class="rounded-xl border border-green-500 text-white bg-green-500 py-2 px-4 hover:bg-white hover:text-green-500"><button class="mt-10">
                        Edit
                    </button></a>
                <form method="POST" action="/genre/{{ $genre->id }}" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <a href="/"><button type="submit" class="rounded-xl text-white bg-red-500 py-2 px-4">
                            DELETE
                        </button></a>
                </form>

            </section>
        @endforeach
        <a href="/create"><button class="rounded-xl text-white bg-blue-500 py-2 px-4">Create+</button></a>
    </main>
</x-layout>
