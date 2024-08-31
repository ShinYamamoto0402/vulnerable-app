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
        <h1>500 - Internal Server Error</h1>
        <p class="system-error-message">Something went wrong on our servers. Please try again later.</p>
        <div class="btn-group">
            <button type="button" onclick="window.location.href='{{ route('loginForm') }}'" class="btn-rtn">Go to Top</button>
        </div>
    </div>
</body>

</html>