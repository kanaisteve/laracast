<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex">
        @auth
            {{-- Authenticated user session --}}
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="text-xs font-bold uppercase mt-4">Welcome, {{ auth()->user()->name }}!</button>
                </x-slot>

                {{-- @if (auth()->user()->can('admin')) --}}
                @can('admin') 
                    {{-- <x-dropdown-item href="/admin/dashboard" class="{{request()->is('admin/posts') ? 'bg-blue-500 text-white' : ''}}">Dashboard</x-dropdown-item> --}}
                    <x-dropdown-item href="/admin/posts" class="{{request()->is('admin/posts') ? 'bg-blue-500 text-white' : ''}}">Dashboard</x-dropdown-item>
                    <x-dropdown-item 
                        href="/admin/posts/create" 
                        class="{{request()->is('admin/posts/create') ? 'bg-blue-500 text-white' : ''}}"
                    >New Post</x-dropdown-item>
                @endcan
                {{-- @endif --}}
                
                <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
                
                <form id="logout-form" action="/logout" method="POST" class="hidden">
                    @csrf
                </form>
            </x-dropdown>
            
        @else
            {{-- Guest session --}}
            <a href="/register" class="text-xs font-bold uppercase mt-4">Register</a>
            <a href="/login" class="text-xs font-bold uppercase mt-4 ml-6">Login</a>
        @endauth

        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>