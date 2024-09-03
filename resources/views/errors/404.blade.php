@extends('layouts.app')

@section('title', '404 - Page Not Found')

@section('content')
<h1>404 - Page Not Found</h1>
<p class="system-error-message">The page you are looking for does not exist.</p>
<div class="btn-group">
    <button type="button" onclick="window.location.href='{{ route('loginForm') }}'" class="btn-rtn">Go to Top</button>
</div>
@endsection