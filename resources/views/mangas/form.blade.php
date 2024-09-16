<div class="mb-4">
    <label for="title" class="block text-gray-700">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $manga->title) }}" required
           class="border border-gray-300 rounded p-2 w-full">
</div>

<div class="mb-4">
    <label for="author" class="block text-gray-700">Author:</label>
    <input type="text" name="author" id="author" value="{{ old('author', $manga->author) }}" required
           class="border border-gray-300 rounded p-2 w-full">
</div>

<div class="mb-4">
    <label for="genre" class="block text-gray-700">Genre:</label>
    <select name="genre_id" id="genre" required class="border border-gray-300 rounded p-2 w-full">
        <option value="">Select a Genre</option>
        @foreach($genres as $genre)
            @if( $manga->genre != null && $manga->genre->id == $genre->id)
                <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
            @else
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endif

        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="rating" class="block text-gray-700">Rating:</label>
    <input type="text" name="rating" id="rating" value="{{ old('rating', $manga->rating) }}" required
           class="border border-gray-300 rounded p-2 w-full">
</div>

<div class="mb-4">
    <label for="description" class="block text-gray-700">Description:</label>
    <textarea name="description" id="description" required
              class="border border-gray-300 rounded p-2 w-full h-auto">{{ old('description', $manga->description) }}</textarea>
</div>

<button type="submit" class="rounded-xl border border-blue-500 text-white bg-blue-500 py-2 px-4 hover:bg-white hover:text-blue-500">Done</button>
