<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
        <div class="min-h-screen px-4">
            @include('layouts.navbar')

            <div class="flex min-h-screen">
                @include('layouts.sidebar')

                <div class="w-[90%]">
                    @if (isset($header))
                    <header class="bg-white py-4">
                        <div class="px-6">
                            {{ $header }}
                        </div>
                    </header>
                    @endif
                    <div class="bg-gray-200">
                        <main>
                            {{$slot}}
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
