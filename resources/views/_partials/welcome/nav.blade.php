<header class="flex bg-white items-center shadow-sm bg-white h-16 py-4" role="banner">
    <div class="container flex items-center mx-auto px-6 space-x-4" >
        <div class="flex items-center">
            <a href="/" title="{{ config('app.name')}} home" class="inline-flex items-center">
                <img class="h-8" loading="lazy" src="https://laravel-zero.com/assets/img/logo.svg" alt="{{ config('app.name')}} logo" />
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center text-right">
            <div id="docsearch"></div>

            <div class="hidden lg:flex">
                @include('_partials.nav-items')
            </div>
        </div>
    </div>
</header>
