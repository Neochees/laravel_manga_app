<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="p-6 bg-gray-100 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800">Create Manga</h2>

            <form method="POST" action="/manga/create">
                @csrf
                @yield('content')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title:</label>
                    <input type="text" name="title" id="title" value="{{ 'title' }}" required
                           class="border border-gray-300 rounded p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="author" class="block text-gray-700">Author:</label>
                    <input type="text" name="author" id="author" value="{{ 'author' }}" required
                           class="border border-gray-300 rounded p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="genre" class="block text-gray-700">Genre:</label>
                    <input type="text" name="genre" id="genre" value="{{ 'genre' }}" required
                           class="border border-gray-300 rounded p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="rating" class="block text-gray-700">Rating:</label>
                    <input type="text" name="rating" id="rating" value="{{ 'rating' }}" required
                           class="border border-gray-300 rounded p-2 w-full">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description:</label>
                    <textarea name="description" id="description" required
                              class="border border-gray-300 rounded p-2 w-full h-auto">{{ 'description' }}</textarea>
                </div>

                <button type="submit" class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500">Create</button>
            </form>

            <a href="/"><button class="rounded-xl border border-blue-500 text-blue-500 bg-white py-2 px-4 hover:bg-blue-500 hover:text-white mt-2">Back</button></a>
        </section>
    </main>
</x-layout>
