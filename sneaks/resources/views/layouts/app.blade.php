<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sneaks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        <x-header/>
        <main class="flex-grow-1">
            @yield('content')
        </main>
        <x-footer />
    </div>
</body>
</html>
