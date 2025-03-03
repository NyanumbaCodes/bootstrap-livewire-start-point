<x-app-layout>
    <x-slot:header>
        {{ $header ?? '' }}
    </x-slot:header>
    {{ $slot }}
</x-app-layout>
