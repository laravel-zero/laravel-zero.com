@props(['tag' => 'button'])

<{{ $tag }} {{ $attributes->merge(['class' => 'whitespace-nowrap md:w-auto transition duration-200 bg-primary-600 hover:bg-primary-600 font-semibold tracking-wider text-white dark:text-white hover:no-underline hover:text-white rounded-full py-3 px-6']) }}>
    {{ $slot }}
</{{ $tag }}>
