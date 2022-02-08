<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

</head>

<body class="font-sans antialiased">

    <div id="app" class="bg-white rounded-lg shadow px-2 py-6 sm:px-6"> {{$slot}}</div>

    @stack('scripts')

    {{ vite_assets() }}
</body>

</html>
