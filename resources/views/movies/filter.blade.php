@extends('layouts.app')

@section('title', 'Movie Filter')

@section('content')

<div class="card mb-4">
    <div class="card-body">
        <h2>Movie Filter</h2>
        <p>{{ $message }}</p>
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
    </tr>
</thead>

<tbody>

    @forelse ($movies as $movie)

    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $movie['title'] }}</td>
        <td>{{ $movie['director'] }}</td>
        <td>{{ $movie['genre'] }}</td>
        <td>{{ $movie['year'] }}</td>
    </tr>

    @empty

    <tr>
        <td colspan="5" class="text-center">
            No movies match your selected genre.
        </td>
    </tr>

    @endforelse

</tbody>


</table>

<a href="{{ route('movies.index') }}" class="btn btn-primary">
    Back to Movies
</a>

@endsection
