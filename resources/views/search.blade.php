<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <h1>Search Results</h1>
        @if (count($users) > 0)
        <ul>
            @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <li>Bank balance ${{ $user->savings }}</li>
            @endforeach
        </ul>
        @else
        <p class="empty-message">No users found.</p>
        @endif
        <div class="btn-group">
            <button type="button" onclick="window.location.href='{{ route('searchForm') }}'" class="btn-rtn">Back</button>
        </div>
        <div class="search-footer">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>
</body>

</html>