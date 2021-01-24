<x-app-layout layout="base" :title="$title" :description="$description"
              class="text-cool-gray-800 leading-normal font-sans"
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
    @push('scripts')
        <script defer src="{{ mix('js/app.js') }}"></script>
    @endpush
</x-app-layout>
