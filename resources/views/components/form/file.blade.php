<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input type="file" class="border border-gray-200 p-2 w-full rounded" value="{{ old($name) }}" name="{{ $name }}" id="{{ $name }}" required>
    <x-form.error name="{{ $name }}" />
</x-form.field>