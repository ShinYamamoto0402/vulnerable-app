<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Welcome!',
                    text: '{{ session('
                    success ') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
        @endif
        <h1>Search Users</h1>
        <div class="infomation">
            @if (session('success'))
            <p>Hello! {{ session('success') }}.</p>
            @endif
            <p>Who is the person you are looking for?</p>
        </div>
        <form action="/search" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter name" required>
            <div class="btn-group">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>
        <div class="search-footer">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>
</body>

</html>