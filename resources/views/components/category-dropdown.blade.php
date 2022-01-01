<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-36 flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}
            <x-icons.down-arrow class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/">All</x-dropdown-item>
    @foreach ($categories as $category)
        {{-- <a href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"  --}}
        <a href="?category={{ $category->slug }}" 
            class="
                block text-left px-3 text-sm leading-6 
                hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
                {{ isset($currentCategory) && $currentCategory->id === $category->id ? 'bg-blue-500 text-white' : '' }}
            ">
            {{ ucwords($category->slug) }}
        </a>
    @endforeach
</x-dropdown>