<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Create an Account</h1>
                <form method="POST" action="/signup" class="mt-10">
                    @csrf

                    <x-form.input name="name" type="text" autocomplete="first-last-name" />
                    <x-form.input name="username" type="text" autocomplete="username" />
                    <x-form.input name="email" type="email" autocomplete="useremail" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />

                    <x-btn.submit-btn>Register</x-btn.submit-btn>
                    <!-- option to list all the errors associated with validation -->
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>