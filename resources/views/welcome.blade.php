<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col">
        <div class="flex p-6 flex-row justify-between bg-indigo-600">
        <a href="/" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Home</a>
            @if (Route::has('login'))
            <div class=" flex space-x-4">
                @auth
                <a href="{{ url('/dashboard') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        <div class="bg-gray-50 min-h-screen">
    <div class="flex flex-col">
        <p>dfd</p>
        <p>dfdf</p>
    </div>
    </div>
    </div>

    {{ vite_assets() }}
</body>

</html>
