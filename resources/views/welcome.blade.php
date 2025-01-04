<x-app-layout layout="welcome" class="flex flex-col justify-between min-h-screen">
    <div class="w-full flex-auto">
        <div
            class="absolute inset-0 [background:radial-gradient(circle_at_15%_50%,rgb(212,203,255),rgb(255_255_255/0)25%),radial-gradient(circle_at_85%_30%,rgb(100_244_100/0.25),rgb(255_255_255/0)25%)] opacity-40 from-primary-900 -z-10"></div>

        <section class="container mx-auto py-6 px-6 xl:py-12">
            <div class="max-w-2xl text-center mx-auto py-24 px-5">
                <div class="mt-8 w-full text-center">
                    <h1 id="intro-docs-template"
                        class="text-3xl md:text-6xl font-bold tracking-tight mt-2 dark:text-gray-100">
                        Build Your next cli tool with <span class="text-primary">{{ config('site.name') }}</span>
                    </h1>

                    <h2 class="mt-3 text-gray-500 md:text-lg dark:text-gray-200">
                        {{ config('site.description') }}
                    </h2>

                    <div
                        class="flex flex-wrap space-x-0 sm:space-x-4 space-y-4 sm:space-y-0 justify-center items-center my-8 text-sm">
                        <span class="bg-primary-100 flex gap-5 items-center justify-between py-3 px-5 rounded-full">
                            <code id="composer-install-cmd"
                                  class="text-primary-900 text-left whitespace-nowrap overflow-hidden overflow-ellipsis">
                                composer global require laravel-zero/installer
                            </code>
                            <span class="text-primary-900 cursor-pointer copyBtn"
                                  data-clipboard-target="#composer-install-cmd">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"><path
                                        d="M1 9.50006C1 10.3285 1.67157 11.0001 2.5 11.0001H4L4 10.0001H2.5C2.22386 10.0001 2 9.7762 2 9.50006L2 2.50006C2 2.22392 2.22386 2.00006 2.5 2.00006L9.5 2.00006C9.77614 2.00006 10 2.22392 10 2.50006V4.00002H5.5C4.67158 4.00002 4 4.67159 4 5.50002V12.5C4 13.3284 4.67158 14 5.5 14H12.5C13.3284 14 14 13.3284 14 12.5V5.50002C14 4.67159 13.3284 4.00002 12.5 4.00002H11V2.50006C11 1.67163 10.3284 1.00006 9.5 1.00006H2.5C1.67157 1.00006 1 1.67163 1 2.50006V9.50006ZM5 5.50002C5 5.22388 5.22386 5.00002 5.5 5.00002H12.5C12.7761 5.00002 13 5.22388 13 5.50002V12.5C13 12.7762 12.7761 13 12.5 13H5.5C5.22386 13 5 12.7762 5 12.5V5.50002Z"
                                        fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            </span>
                        </span>
                        <x-primary-btn tag="a" href="/docs/introduction">
                            Get Started
                        </x-primary-btn>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 max-w-screen-lg mx-auto gap-10 mt-10">
                <div class="flex flex-col w-full mb-8 mx-3 px-2">
                    <div class="flex">
                        <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-8 4l8 4l8 -4l-8 -4"/><path d="M4 12l8 4l8 -4"/><path d="M4 16l8 4l8 -4"/>
                            </svg>
                        </span>
                    </div>

                    <h3 id="intro-laravel"
                        class="uppercase text-lg text-primary-700 dark:text-primary-400 font-bold mt-6 mb-3">
                        Highly modular <br>Framework design
                    </h3>

                    <p class="text-gray-600 dark:text-gray-200">
                        Laravel Zero is a lightweight and modular micro-framework for developing fast and powerful
                        console
                        applications. Built on top of the Laravel components.
                    </p>
                </div>

                <div class="flex flex-col w-full mb-8 mx-3 px-2">

                    <div class="flex">
                        <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7l5 5l-5 5"/><path d="M12 19l7 0"/>
                            </svg>
                        </span>
                    </div>

                    <h3 id="intro-markdown"
                        class="uppercase text-lg text-primary-700 dark:text-primary-400 font-bold mt-6 mb-3">
                        Write powerful<br>Console applications
                    </h3>

                    <p class="text-gray-600 dark:text-gray-200">
                        Laravel Zero has a simple and powerful syntax that enables developers to build very complex
                        applications far more quickly than with any previous framework.
                    </p>
                </div>

                <div class="flex flex-col w-full mx-3 px-2">
                    <div class="flex">
                        <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"/> <path d="M6 8h.01"/> <path d="M9 8h.01"/>
                            </svg>
                        </span>
                    </div>

                    <h3 id="intro-mix"
                        class="uppercase text-lg text-primary-700 dark:text-primary-400 font-bold mt-6 mb-3">
                        For Artisans<br>100% Open Source
                    </h3>

                    <p class="text-gray-600 dark:text-gray-200">
                        You’re free to dig through the source to see exactly how it works.
                        See something that needs to be improved?
                        Just send us a pull request on GitHub.
                    </p>
                </div>
            </div>



            <div class="grid md:grid-cols-2 max-w-screen-lg mx-auto mt-28 px-5 gap-5">
                <div class="flex items-center flex-wrap">
                    <div class="max-w-sm">
                        <span class="text-primary-500 bg-primary-500/10 px-3 py-1 rounded-full text-xs uppercase font-medium tracking-wider">
                            Best cli apps builder ever
                        </span>
                        <h2 class="uppercase font-semibold text-2xl mt-3 dark:text-primary-400">
                            Build your next CLI tool faster than ever
                        </h2>
                        <p class="mt-2 text-gray-500 dark:text-gray-200">
                            Laravel Zero offers a simple, yet powerful framework to create fast, reliable,
                            and scalable console applications built on the robust Laravel components.
                        </p>
                        <a class="inline-flex items-center gap-2 text-primary-500 text-sm mt-4" href="/docs">
                            <span>Read the docs</span>
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="min-w-0 mx-auto w-full flex items-center">
                    <img src="{{ asset('assets/img/logo-large.png') }}" alt="{{ config('site.name') }} logo">
                </div>
            </div>



            {{-- Features You'll love section --}}
            <div class="max-w-4xl mx-auto mt-28">
                <div class="text-center">
                    <h2 class="font-semibold text-3xl dark:text-primary-400">Features you'll love</h2>
                    <p class="max-w-md mx-auto mt-2 text-gray-500">
                        Laravel Zero is a lightweight and flexible framework for building powerful console applications, built on top of Laravel.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-10 mt-10">
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.849976 1.74998C0.849976 1.25292 1.25292 0.849976 1.74998 0.849976H3.24998C3.74703 0.849976 4.14998 1.25292 4.14998 1.74998V2.04998H10.85V1.74998C10.85 1.25292 11.2529 0.849976 11.75 0.849976H13.25C13.747 0.849976 14.15 1.25292 14.15 1.74998V3.24998C14.15 3.74703 13.747 4.14998 13.25 4.14998H12.95V10.85H13.25C13.747 10.85 14.15 11.2529 14.15 11.75V13.25C14.15 13.747 13.747 14.15 13.25 14.15H11.75C11.2529 14.15 10.85 13.747 10.85 13.25V12.95H4.14998V13.25C4.14998 13.747 3.74703 14.15 3.24998 14.15H1.74998C1.25292 14.15 0.849976 13.747 0.849976 13.25V11.75C0.849976 11.2529 1.25292 10.85 1.74998 10.85H2.04998V4.14998H1.74998C1.25292 4.14998 0.849976 3.74703 0.849976 3.24998V1.74998ZM2.94998 4.14998V10.85H3.24998C3.74703 10.85 4.14998 11.2529 4.14998 11.75V12.05H10.85V11.75C10.85 11.2529 11.2529 10.85 11.75 10.85H12.05V4.14998H11.75C11.2529 4.14998 10.85 3.74703 10.85 3.24998V2.94998H4.14998V3.24998C4.14998 3.74703 3.74703 4.14998 3.24998 4.14998H2.94998ZM2.34998 1.74998H1.74998V2.34998V2.64998V3.24998H2.34998H2.64998H3.24998V2.64998V2.34998V1.74998H2.64998H2.34998ZM5.09998 5.99998C5.09998 5.50292 5.50292 5.09998 5.99998 5.09998H6.99998C7.49703 5.09998 7.89998 5.50292 7.89998 5.99998V6.99998C7.89998 7.03591 7.89787 7.07134 7.89378 7.10618C7.92861 7.10208 7.96405 7.09998 7.99998 7.09998H8.99998C9.49703 7.09998 9.89998 7.50292 9.89998 7.99998V8.99998C9.89998 9.49703 9.49703 9.89998 8.99998 9.89998H7.99998C7.50292 9.89998 7.09998 9.49703 7.09998 8.99998V7.99998C7.09998 7.96405 7.10208 7.92861 7.10618 7.89378C7.07134 7.89787 7.03591 7.89998 6.99998 7.89998H5.99998C5.50292 7.89998 5.09998 7.49703 5.09998 6.99998V5.99998ZM6.09998 5.99998H5.99998V6.09998V6.89998V6.99998H6.09998H6.89998H6.99998V6.89998V6.09998V5.99998H6.89998H6.09998ZM7.99998 7.99998H8.09998H8.89998H8.99998V8.09998V8.89998V8.99998H8.89998H8.09998H7.99998V8.89998V8.09998V7.99998ZM2.64998 11.75H2.34998H1.74998V12.35V12.65V13.25H2.34998H2.64998H3.24998V12.65V12.35V11.75H2.64998ZM11.75 1.74998H12.35H12.65H13.25V2.34998V2.64998V3.24998H12.65H12.35H11.75V2.64998V2.34998V1.74998ZM12.65 11.75H12.35H11.75V12.35V12.65V13.25H12.35H12.65H13.25V12.65V12.35V11.75H12.65Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Commands</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Build powerful and easy-to-use console commands without breaking a sweat. Using a straightforward syntax that gets the job done quickly.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><path stroke="none" d="M0 0h24v24H0z" /><path d="M7 9.667a2.667 2.667 0 0 1 2.667 -2.667h8.666a2.667 2.667 0 0 1 2.667 2.667v8.666a2.667 2.667 0 0 1 -2.667 2.667h-8.666a2.667 2.667 0 0 1 -2.667 -2.667z" /><path d="M4.012 16.737a2 2 0 0 1 -1.012 -1.737v-10c0 -1.1 .9 -2 2 -2h10c.75 0 1.158 .385 1.5 1" /><path d="M11 14l2 2l4 -4" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Service Providers</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Tap into the full power of Laravel by using service providers to easily add more functionality to your application.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0" /><path d="M4 6v6a8 3 0 0 0 16 0v-6" /><path d="M4 12v6a8 3 0 0 0 16 0v-6" /></svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Database</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Work with your database like a pro using the DB facade. Whether it’s retrieving data or making changes, it’s simple and hassle-free.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-1" /><path d="M8 16h8" /><path d="M8.322 12.582l7.956 .836" /><path d="M8.787 9.168l7.826 1.664" /><path d="M10.096 5.764l7.608 2.472" /></svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Logging</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Stay on top of what’s happening in your app with built-in logging. Debug issues, track activity, and keep everything running smoothly.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3h3l2 2h5a2 2 0 0 1 2 2v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" /><path d="M17 16v2a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h2" /></svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Filesystem</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Handle files effortlessly. From reading and writing to managing files, Laravel Zero gives you all the tools you need.
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start">
                        <div class="flex">
                            <span class="text-primary-600 bg-primary-500/10 p-3 rounded-full">
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" /><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" /></svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-xl dark:text-primary-400">Desktop notifications</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-200">
                                Make your app stand out by sending friendly desktop notifications that keep users informed in real-time.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 text-center text-gray-800 dark:text-gray-200">
                    Wait, there's more! <a href="/docs" class="text-primary">Check out all features</a>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
