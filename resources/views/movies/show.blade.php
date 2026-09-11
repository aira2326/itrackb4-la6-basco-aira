@extends('layouts.app')

@section('title', $movie['title'])

@section('content')

<div class="card">

    <div class="card-body">

        <h2>{{ $movie['title'] }}</h2>

        <p>
            <strong>Title:</strong>
            {{ $movie['title'] }}
        </p>

        <p>
            <strong>Director:</strong>
            {{ $movie['director'] }}
        </p>

        <p>
            <strong>Year:</strong>
            {{ $movie['year'] }}
        </p>

        <p>
            <strong>Genre:</strong>
            {{ $movie['genre'] }}
        </p>

        <a href="{{ route('movies.index') }}"
           class="btn btn-primary">
            Back to list
        </a>

        <a href="{{ route('movies.featured') }}"
           class="btn btn-primary">
            Featured Movie
        </a>

    </div>

</div>

@endsection
