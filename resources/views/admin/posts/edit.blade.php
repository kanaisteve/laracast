<x-layout>
    <x-setting heading="Edit Post: {{$post->title}}">
        <form method="POST" action="/admin/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />
            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img src="/storage/{{ $post->thumbnail }}" alt="" class="rounded-xl ml-6" width="100">
            </div>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $post->body) }}</x-form.textarea>

            <!-- Category -->
            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                        <option 
                            value="{{ $category->id }}" 
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                        >{{ ucwords($category->name) }}</option>    
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <!-- Submit Btn -->
            <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                <x-form.button>Update</x-form.button>
            </div>
        </form>
    </x-setting>
</x-layout>