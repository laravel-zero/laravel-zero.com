<x-app-layout layout="base">
    <x-slot name="head">
        {{ $head ?? '' }}
    </x-slot>

    @include('_partials.welcome.nav')

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-slot name="footer">
        {{ $footer ?? '' }}
    </x-slot>
</x-app-layout>
