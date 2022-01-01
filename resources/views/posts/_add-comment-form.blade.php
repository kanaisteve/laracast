@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST" class="">
            @csrf
    
            <header class="flex">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>
    
            <div class="mt-6">
                <textarea name="body" 
                    id="body" 
                    rows="5" 
                    class="w-full text-sm focus:outline-none focus:ring" 
                    placeholder="Quick, think of something to say!"
                    required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="flex justify-end mt-4 pt-4 border-t border-gray-200">
                <x-btn.submit-btn>Post</x-btn>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in</a> to leave a comment.
    </p>
@endauth