<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Occurred</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container error-container">
        <h1>404 - Page Not Found</h1>
        <p class="system-error-message">The page you are looking for does not exist.</p>
        <div class="btn-group">
            <button type="button" onclick="window.location.href='{{ route('loginForm') }}'" class="btn-rtn">Go to Top</button>
        </div>
</body>

</html>