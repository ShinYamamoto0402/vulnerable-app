@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<h1>Search Results</h1>
@if (count($users) > 0)
<ul>
    @foreach ($users as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>
@else
<p class="empty-message">No users found.</p>
@endif
<div class="btn-group">
    <button type="button" onclick="window.location.href='{{ route('search') }}'" class="btn-rtn">Back</button>
</div>
<div class="search-footer">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</div>
@endsection