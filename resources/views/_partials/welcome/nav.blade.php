<header class="flex items-center dark:bg-gray-900 py-4" role="banner">
    <div class="container flex items-center mx-auto px-6 space-x-4" >
        <div class="flex items-center">
            <a href="/" title="{{ config('app.name') }} home" class="inline-flex items-center">
                <img class="h-8 dark:hidden flex" loading="lazy" src="{{ asset('assets/img/logo-dark.svg') }}" alt="{{ config('app.name') }} logo" />
                <img class="h-8 hidden dark:flex" loading="lazy" src="{{ asset('assets/img/logo.svg') }}" alt="{{ config('app.name') }} logo" />
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center text-right">
            <button x-data="ToggleDark()" x-cloak x-init="created()" title="Dark Mode" @click.prevent="toggle()"
                    class="ml-6 dark:text-white text-gray-700 focus:outline-none" :class="{'text-white': mode == 'dark'}">
                <svg class="fill-current h-8 lg:h-6" :class="{'hidden': mode == 'dark'}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /><path d="M17 4a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" /><path d="M19 11h2m-1 -1v2" /></svg>
                <svg class="fill-current h-8 lg:h-6" :class="{'hidden': mode == 'light'}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M12 5l0 .01" /><path d="M17 7l0 .01" /><path d="M19 12l0 .01" /><path d="M17 17l0 .01" /><path d="M12 19l0 .01" /><path d="M7 17l0 .01" /><path d="M5 12l0 .01" /><path d="M7 7l0 .01" /></svg>
            </button>

            <div id="docsearch"></div>

            <div class="hidden lg:flex">
                @include('_partials.nav-items')
            </div>
        </div>
    </div>
</header>
