<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MovieDB' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <x-navbar /> 

    
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
