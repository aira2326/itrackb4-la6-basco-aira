@extends('layouts.app')

@section('title', 'My Movie List')

@section('content')

<div class="card mb-4">
    <div class="card-body">

        <h2>My Movie List</h2>

        <p>
            Here are the movies in my collection.
        </p>

    </div>
</div>

<table class="table table-striped table-bordered">

    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Director</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($movies as $movie)

        <tr>

            <td>
                {{ $loop->iteration }}
            </td>

            <td>
                <a href="{{ route('movies.show', $movie['id']) }}">
                    {{ $movie['title'] }}
                </a>
            </td>

            <td>
                {{ $movie['director'] }}
            </td>

            <td>
                {{ $movie['genre'] }}
            </td>

            <td>

                {{ $movie['year'] }}

                @if ($movie['year'] >= 2010)

                    <span class="badge bg-success">
                        Modern
                    </span>

                @else

                    <span class="badge bg-secondary">
                        Classic
                    </span>

                @endif

            </td>

            <td>

                <a href="{{ route('movies.show', $movie['id']) }}"
                   class="btn btn-primary btn-sm">
                    View
                </a>

            </td>

        </tr>

        @empty

        <tr>

            <td colspan="6" class="text-center">
                No movies are available right now.
            </td>

        </tr>

        @endforelse

    </tbody>

</table>

<div class="mt-3">

    <a href="{{ route('movies.index') }}"
       class="btn btn-primary">
        Show Movies
    </a>

    <a href="{{ route('movies.featured') }}"
       class="btn btn-primary">
        Featured Movie
    </a>

</div>

@endsection
