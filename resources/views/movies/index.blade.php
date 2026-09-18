@extends('layouts.app')

@section('title', 'All Movies')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <h2>Movie List</h2>
        <p>Prepared by: Aira Basco</p>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead>
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
                <td>{{ $loop->iteration }}</td>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['director'] }}</td>
                <td>{{ $movie['genre'] }}</td>
                <td>
                    {{ $movie['year'] }}

                    @if ($movie['year'] >= 2010)
                        <span class="badge bg-success">Modern</span>
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

@endsection