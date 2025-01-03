<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $newTitle = empty($title) ? config('site.title') : "{$title} | ".config('site.title')
    @endphp

    <title>{{ $newTitle  }}</title>

    <meta name="description" content="{{ $attributes->get('description') ?? config('site.description') }}">

    <meta property="og:site_name" content="{{ config('site.title') }}"/>
    <meta property="og:title" content="{{ $newTitle }}"/>
    <meta property="og:description" content="{{ $description ?? config('site.description') }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="https://laravel-zero.com/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@enunomaduro">
    <meta name="twitter:image:alt" content="Micro-framework for console applications">

    <link rel="icon" href="/favicon.ico">

    {{ $head ?? '' }}

    @vite('resources/css/app.css')

    @stack('styles')
</head>
<body {{ $attributes->except(['title', 'description']) }}>

    <div class="flex flex-col min-h-screen dark:bg-gray-900">
        {{ $slot }}

        {{ $footer ?? "" }}

        <footer class="py-4 text-sm text-center text-gray-200 bg-gray-800" role="contentinfo">
            <ul class="flex flex-col justify-center my-0 list-none md:flex-row">
                <li class="md:mr-2">
                    &copy; <a href="https://laravel-zero.com" class="font-bold text-white hover:text-white"
                              title="Laravel Zero website">Laravel Zero</a> {{ date('Y') }}.
                </li>

                <li>
                    Built with <a href="https://laravel.com" class="font-bold text-white hover:text-white" title="Laravel">Laravel</a>
                    and <a href="https://tailwindcss.com" class="font-bold text-white hover:text-white"
                           title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                    Logo by <a href="https://twitter.com/caneco" class="font-bold text-white hover:text-white" title="Caneco">Caneco</a>.
                </li>
            </ul>
        </footer>
    </div>


@stack('scripts')

@vite('resources/js/app.js')

@if (app()->environment('production'))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61404619-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-61404619-3');
    </script>
@endif
</body>
</html>
