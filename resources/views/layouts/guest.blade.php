<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sunny work') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>

<body class="bg-gray-50">
    <div class="flex p-6 flex-row justify-between bg-indigo-600">
        <a href="/" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Home</a>
        @if (Route::has('login'))
        <div class=" flex space-x-4">
            @auth
            <a href="{{ url('/dashboard') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Dashboard</a>
            @else

            @if (! Route::is('login'))
            <a href="{{ route('login') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Log in</a>
            @endif

            @if (Route::has('register') && (! Route::is('register')))
            <a href="{{ route('register') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
    {{ vite_assets() }}
    <x-footer />
</body>

</html>
