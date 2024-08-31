@extends('layouts.app')

@section('title', '500 - Internal Server Error')

@section('content')
<h1>500 - Internal Server Error</h1>
<p class="system-error-message">Something went wrong on our servers. Please try again later.</p>
<div class="btn-group">
    <button type="button" onclick="window.location.href='{{ route('loginForm') }}'" class="btn-rtn">Go to Top</button>
</div>
@endsection