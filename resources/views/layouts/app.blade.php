<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MovieDB')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" d-flex flex-column min-vh-100">

    {{-- NAVBAR --}}
    @include('components.navbar')

    {{-- CONTENUTO PRINCIPALE --}}
    <div class="container py-4 flex-grow-1">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    @include('components.footer')

</body>
</html>
