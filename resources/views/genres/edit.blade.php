<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="p-6 bg-gray-100 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Edit Genre</h2>

            <form method="POST" action="/genre/{{ $genre->id }}">
                @csrf
                @method('PATCH')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $genre->name) }}" required
                           class="border border-gray-300 rounded p-2 w-full">
                </div>

{{--                <div class="mb-4">--}}
{{--                    <label for="description" class="block text-gray-700">Description:</label>--}}
{{--                    <textarea name="description" id="description" required--}}
{{--                              class="border border-gray-300 rounded p-2 w-full h-auto">{{ old('description', $genre->description) }}</textarea>--}}
{{--                </div>--}}

                <button type="submit" class="rounded-xl border border-green-500 text-white bg-green-500 py-2 px-4 hover:bg-white hover:text-green-500">Update</button>

            </form>
            <a href="/genre"><button class="rounded-xl border border-green-500 text-green-500 bg-white py-2 px-4 hover:bg-green-500 hover:text-white mt-2">Back</button></a>
        </section>
    </main>
</x-layout>
