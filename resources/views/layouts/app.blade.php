<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style type="text/css">
            @font-face {
                font-family: 'CoconNextArabic';
                src: url('{{ public_path('CoconNextArabic-Light/4fdca598434885f33f83ffdb03d1c5e7.woff') }}');
            }
            </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class=" bg-gray-100 dark:bg-gray-900 flex">

            <div class="w-1/4">
                @include('layouts.navigation')
            </div>
            <div class=" w-full">
                <!-- Page Content -->
                @if (isset($header))
                <header style="z-index: 1;" class="bg-white fixed w-full   dark:bg-gray-800 shadow-md" >
                    <div class="max-w-5xl font-CoconNextArabic  py-2 px-4 flex-row flex justify-between mr-10 " >
                        {{ $header }}
                    </div>
                </header>
            @endif
                <main class="mt-24">
                    {{-- <div class="pb-16">
                        @include('layouts.nav')
                    </div> --}}
                    {{ $slot }}
                </main>
            </div>

        </div>
    </body>
</html>
