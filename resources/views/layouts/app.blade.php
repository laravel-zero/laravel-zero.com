<x-app-layout layout="base" :title="$title" :description="$description"
              class="font-sans leading-normal text-cool-gray-800"
              x-data="AppOffCanvasMenu()">
    <x-slot name="head">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        {{ $head ?? '' }}
    </x-slot>

    @include('_partials.nav')

    <div>
        {{ $slot }}
    </div>

    <x-slot name="footer">
        {{ $footer ?? '' }}
    </x-slot>
</x-app-layout>
