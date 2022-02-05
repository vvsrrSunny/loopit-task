<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

</head>

<body class="font-sans antialiased">
    <div>
        <div class="bg-indigo-600 pb-32">
            <nav class="bg-indigo-600">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="border-b border-indigo-300">
                        <div class="flex items-center justify-end h-16 px-4 sm:px-0">
                            <div class="flex items-center">
                                <div class="hidden md:block">
                                    <div class="flex items-baseline space-x-4">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <input class="mt-4 bg-indigo-700 text-white px-3 py-2 rounded-md text-sm font-medium cursor-pointer hover:opacity-75" type="submit" value="logout">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-white">
                        Business Data Table
                    </h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
                <div id="app" class="bg-white rounded-lg shadow px-2 py-6 sm:px-6"> {{$slot}}</div>
            </div>
        </main>
    </div>

    @stack('scripts')

    {{ vite_assets() }}
</body>

</html>
