<header class="flex items-center shadow-sm bg-white dark:bg-gray-900 py-4" role="banner">
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
                <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                    stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'dark'}" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
                <svg fill="none" stroke="currentColor" class="fill-current h-8 lg:h-6"
                    stroke-linecap="round" stroke-linejoin="round" :class="{'hidden': mode == 'light'}" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </button>

            <div id="docsearch"></div>

            <div class="hidden lg:flex">
                @include('_partials.nav-items')
            </div>
        </div>
    </div>
</header>
