<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $title = empty($attributes->get('title')) ? config('site.title') : "{$attributes->get('title')} | ".config('site.title')
    @endphp
    <title>{{ $title  }}</title>

    <meta name="description" content="{{ $attributes->get('description') ?? config('site.description') }}">

    <meta property="og:site_name" content="{{ config('site.title') }}"/>
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $attributes->get('description') ?? config('site.description') }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:image" content="https://laravel-zero.com/assets/img/logo.png"/>
    <meta property="og:type" content="website"/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@enunomaduro">
    <meta name="twitter:image:alt" content="Micro-framework for console applications">

    <link rel="icon" href="/favicon.ico">

    {{ $head ?? '' }}

    <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
    <link rel="preload" href="{{ mix('js/app.js') }}" as="script">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('styles')
</head>
<body {{ $attributes->except(['title', 'description']) }}>

{{ $slot }}

{{ $footer ?? "" }}

@stack('scripts')

<script defer src="{{ mix('js/app.js') }}"></script>

@if (app()->environment('production'))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61404619-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-61404619-3');
    </script>
@endif
</body>
</html>
