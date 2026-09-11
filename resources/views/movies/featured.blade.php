@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

<div class="card">
    <div class="card-body">
        <h2>{{ $movie['title'] }}</h2>

        <p><strong>ID:</strong> {{ $movie['id'] }}</p>
        <p><strong>Director:</strong> {{ $movie['director'] }}</p>
        <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
        <p><strong>Year:</strong> {{ $movie['year'] }}</p>

        <a href="{{ route('movies.index') }}" class="btn btn-primary">
            Back to Movies
        </a>
    </div>
</div>

@endsection