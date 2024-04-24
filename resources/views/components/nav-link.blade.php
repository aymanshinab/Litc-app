@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#337EA5]    hover:text-white  border-b-2 bg-[#D0EAF5] dark:border-indigo-600 text-sm font-medium text-gray-900 dark:text-gray-100  '
            : 'flex items-center px-3 py-2 text-gray-600  transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-[#337EA5]  hover:text-white  dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
