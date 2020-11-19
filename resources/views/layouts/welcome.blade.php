<x-app-layout layout="base">
    <x-slot name="head">
        {{ $head ?? '' }}
    </x-slot>

    @include('_partials.welcome.nav')

    {{ $slot }}

    <x-slot name="footer">
        {{ $footer ?? '' }}
    </x-slot>
</x-app-layout>
