<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/storage/{{ $post->thumbnail }}" alt="" class="rounded-xl">
                    {{-- <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl"> --}}

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <a href="?author={{ $post->author->username }}">
                                <h5 class="font-bold">{{ $post->author->name }}</h5>
                            </a>
                            <!-- <h6>Kanai Technologies.</h6> -->
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <x-links.back-link href="/">Back to Posts</x-links.back-link>
                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">{{ $post->title }}</h1>

                    <div class="space-y-4 lg:text-lg leading-loose">{!! $post->body !!}</div>
                    
                    <!-- Comment Section  -->
                    <section class="mt-10 space-y-6">
                        {{-- Show comment form --}}
                        @include('posts._add-comment-form')

                        {{-- Show all comments associate to the current post --}}
                        @foreach ($post->comments as $comment)
                            {{-- <x-post-comment :comment="$comment" /> --}}
                            <x-panel class="bg-gray-50">
                                <article class="flex space-x-4">
                                    <!-- Comment Image -->
                                    <div class="flex-shrink-0">
                                        <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" width="60" height="60" alt="" class="rounded-xl">
                                    </div>
                                    <!-- Comment Body -->
                                    <div>
                                        <header class="mb-4">
                                            <h3 class="font-bold">{{ $comment->author->username }}</h3>
                                            <p class="text-xs">Posted <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time></p>
                                        </header>
                                            
                                        <p class="text-xs">{{ $comment->body }}</p>
                                    </div>
                                </article>
                            </x-panel>
                        @endforeach
                    </section>
                </div>
            </article>
        </main>
    </section>
</x-layout>