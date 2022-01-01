<!doctype html>

<head>
    @include('partials._head')
</head>

<body style="font-family: Open Sans, sans-serif">
    
    <section class="px-6 py-8">
        @include('partials._nav')

        {{ $slot }}

        @include('partials._footer')
    </section>
    
    <x-flash />
    
    @include('partials._scripts')
</body>