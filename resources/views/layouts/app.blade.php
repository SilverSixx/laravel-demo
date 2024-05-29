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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @if(session('message'))
                @php
                    $messageType = session('message_type', 'success'); // Default to 'success' if not set
                    $messageStyles = [
                        'success' => 'bg-green-100 border-l-4 border-green-500 text-green-700',
                        'error' => 'bg-red-100 border-l-4 border-red-500 text-red-700',
                        'warning' => 'bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700',
                        'info' => 'bg-blue-100 border-l-4 border-blue-500 text-blue-700',
                    ];
                    $style = $messageStyles[$messageType] ?? $messageStyles['success'];
                @endphp
                <div id="session-message" class="{{ $style }} p-4" role="alert">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
