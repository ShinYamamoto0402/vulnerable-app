@extends('layouts.app')

@section('title', 'Search Results')

@push('css')
<style>
    .pagination-container {
        margin-top: 20px;
        text-align: center;
    }
</style>
@endpush

@section('content')
<h1>Search Results</h1>
@if ($users->count() > 0)
<ul>
    @foreach ($users as $user)
    <li>{!! $user->name !!}</li>
    @endforeach
</ul>
<div class="pagination-container">
    @php
    $currentPage = $users->currentPage();
    $lastPage = $users->lastPage();
    $visiblePages = 10;
    $startPage = max(1, $currentPage - floor($visiblePages / 2));
    $endPage = min($lastPage, $startPage + $visiblePages - 1);

    if ($startPage > 1) {
    $startPage = 1;
    }

    if ($endPage < $lastPage) {
        $endPage=$lastPage;
        }
        @endphp

        @for ($i=1; $i <=$lastPage; $i++)
        @if ($i==$currentPage)
        <span class="pagination active">{{ $i }}</span>
        @elseif ($i <= $endPage && ($i <=$visiblePages || $i> $lastPage - $visiblePages))
            <a href="{{ $users->url($i) }}" class="pagination">{{ $i }}</a>
            @elseif ($i == $startPage && $startPage > 1)
            <span class="pagination">...</span>
            @elseif ($i == $endPage && $endPage < $lastPage)
                <span class="pagination">...</span>
                @endif
                @endfor
</div>

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