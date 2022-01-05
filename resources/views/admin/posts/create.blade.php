<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            
            <x-form.input name="title" required />
            <x-form.input name="slug" required />
            <x-form.file name="thumbnail" required />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

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
                            {{ old('category_id') == $category->id ? 'selected' : ''}}
                        >{{ ucwords($category->name) }}</option>    
                    @endforeach
                </select>

                <x-form.error name="category" />
            </x-form.field>

            <!-- Submit Btn -->
            <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                <x-form.button>Publish</x-form.button>
            </div>
        </form>
    </x-setting>
</x-layout>