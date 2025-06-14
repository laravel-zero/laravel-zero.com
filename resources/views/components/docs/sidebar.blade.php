<nav class="hidden lg:block mt-1 lg:min-w-56 lg:min-h-screen"
	:class="{ 'block lg:block': isOpen === true, 'hidden lg:block': isOpen === false }">
	<div class="lg:sticky lg:w-56 xl:w-64 lg:px-0 lg:top-0 overflow-y-auto bg-white dark:bg-gray-900 scrollbar lg:h-screen fixed left-0 top-nav z-50 overflow-x-auto text-left px-4 h-screen-24 w-full"
	x-ref="dialog" x-on:keydown.escape.window="close()">
        <div class="lg:hidden my-4">
            @include('_partials.nav-items')
        </div>
		<div class="pt-4 pb-6 lg:pr-4 xl:pl-0 docs-nav">
			{{ $slot }}
		</div>
	</div>
</nav>
