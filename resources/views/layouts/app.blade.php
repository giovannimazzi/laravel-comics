<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Comics')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="min-vh-100 d-flex flex-column">

    @include('partials.header')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>