<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable | @yield('title', 'Default Title')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    @stack('css')
    @stack('header-scripts')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    @stack('footer-scripts')
</body>

</html>