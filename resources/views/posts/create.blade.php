<x-layout>
    <section class="max-w-lg mx-auto px-6 py-8">
        <h1 class="text-lg font-bold mb-4">Publish New Post</h1>
        <x-panel>
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <!-- Title -->
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input type="text" class="border border-gray-400 p-2 w-full" value="{{ old('title') }}" name="title" id="title" required>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Slug -->
                <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-700">Slug</label>
                    <input type="text" class="border border-gray-400 p-2 w-full" value="{{ old('slug') }}" name="slug" id="slug" required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Thumbnail -->
                <div class="mb-6">
                    <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-700">Thumbnail</label>
                    <input type="file" class="border border-gray-400 p-2 w-full" value="{{ old('thumbnail') }}" name="thumbnail" id="thumbnail" required>
                    @error('thumbnail')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Excerpt -->
                <div class="mb-6">
                    <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea type="text" class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Body -->
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea type="text" class="border border-gray-400 p-2 w-full" name="body" id="body" required>{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category -->
                <div class="mb-6">
                    <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">Category</label>
                    <select name="category_id" id="category_id">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                            <option 
                                value="{{ $category->id }}" 
                                {{ old('category_id') == $category->id ? 'selected' : ''}}
                            >{{ ucwords($category->name) }}</option>    
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Btn -->
                <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                    <x-btn.submit-btn>Publish</x-btn>
                </div>
            </form>
        </x-panel>
    </section>
</x-layout>