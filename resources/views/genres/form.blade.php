<div class="mb-4">
    <label for="name" class="block text-gray-700">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $genre->name) }}" required
           class="border border-gray-300 rounded p-2 w-full">
</div>

<button type="submit" class="rounded-xl border border-green-500 text-white bg-green-500 py-2 px-4 hover:bg-white hover:text-green-500">Done</button>
