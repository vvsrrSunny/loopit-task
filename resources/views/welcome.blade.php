<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 min-h-screen">
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
        <div>
            <div class="flex flex-col">
                <div class="flex justify-center h-[400px]">
                    <div class="w-10/12">
                        <div class="bg-white">
                            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 rounded-b-md shadow-md">
                                <div class="text-center">
                                    <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Sunny Project</h2>
                                    <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Take control of your ideas.</p>
                                    <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Reach out for working on any of your ideas or projects, feel the confidence in getting your projects that is in line with your vision. I am expert in building
                                        a small, medium and, large scale applications in way that suits clients interests. I do applications using the best industry practices, meaning its absolutely maintainable over the time with in a fraction of cost </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ vite_assets() }}

    <x-footer />
</body>


</html>
