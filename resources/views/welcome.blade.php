<x-app-layout layout="welcome" class="flex flex-col justify-between min-h-screen">
    <div class="w-full flex-auto leading-normal font-sans">
        <section class="container mx-auto py-6 px-6 xl:py-12">
            <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
                <div class="mt-8 w-full lg:w-2/5 lg:pr-6 xl:pr-12 text-center lg:text-left">
                    <h1 id="intro-docs-template" class="text-5xl font-bold">
                        {{ config('site.name') }}
                    </h1>

                    <h2 class="text-3xl text-gray-600 font-light tracking-wider mt-3">
                        {{ config('site.description') }}
                    </h2>

                    <div class="flex flex-wrap justify-center lg:justify-start md:space-x-4 my-8 text-sm uppercase">
                        <a
                            href="/docs/introduction"
                            class="w-full md:w-auto transition duration-200 bg-blue-500 hover:bg-blue-600 font-semibold tracking-wider text-white dark:text-white hover:no-underline hover:text-white rounded-full py-3 px-6"
                        >
                            Get Started
                        </a>

                        <a
                            rel="noopener"
                            href="https://github.com/laravel-zero/laravel-zero"
                            class="w-full md:w-auto transition duration-200 bg-gray-300 hover:bg-gray-400 text-gray-600 dark:text-gray-600 hover:text-white dark:hover:text-white hover:no-underline font-semibold tracking-wider rounded-full py-3 px-6 mt-4 md:mt-0"
                            target="_blank"
                        >
                            View on Github
                        </a>
                    </div>
                </div>

                <div class="mx-auto w-full lg:w-3/5">
                    <img src="{{ asset('assets/img/logo-large.png') }}" alt="{{ config('site.name') }} logo">
                </div>
            </div>

            <hr class="block my-8 border lg:hidden">

            <div
                class="flex flex-col -mx-2 items-center justify-center md:items-start lg:flex-row lg:-mx-4 lg:justify-between">
                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <img src="{{ asset('assets/img/icon-stack.svg') }}" class="h-12 w-12" alt="stack icon">

                    <h3 id="intro-laravel" class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        Highly modular <br>Framework design
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        Laravel Zero is a lightweight and modular micro-framework for developing fast and powerful
                        console
                        applications. Built on top of the Laravel components.
                    </p>
                </div>

                <div class="flex flex-col w-full mb-8 mx-3 px-2 lg:w-1/3">
                    <img src="{{ asset('assets/img/icon-terminal.svg') }}" class="h-12 w-12"
                         alt="terminal icon">

                    <h3 id="intro-markdown" class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        Write powerful<br>Console applications
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        Laravel Zero has a simple and powerful syntax that enables developers to build very complex
                        applications far more quickly than with any previous framework.
                    </p>
                </div>

                <div class="flex flex-col w-full mx-3 px-2 lg:w-1/3">
                    <img src="{{ asset('assets/img/icon-window.svg') }}" class="h-12 w-12" alt="window icon">

                    <h3 id="intro-mix" class="uppercase text-lg text-blue-900 dark:text-blue-300 font-bold mt-6 mb-3">
                        For Artisans<br>100% Open Source
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300">
                        You’re free to dig through the source to see exactly how it works. See something that needs to
                        be
                        improved? Just send us a pull request on GitHub.
                    </p>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
