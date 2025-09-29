<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sneaks</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-vh-100 max-width-100">
        <x-header/>
        <main class="container-fluid">
            @yield('content')
        </main>
        <x-footer />
    </div>
</body>
</html>
