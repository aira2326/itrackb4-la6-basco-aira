@extends('layouts.app')

@section('title', 'Featured Books')

@section('content')

<div class="card shadow-sm">

    <div class="card-body">

        <h2 class="mb-3">Featured Books</h2>

        <p class="text-muted">
            These are the featured fantasy books in our library.
        </p>

        <div class="table-responsive">

            <table class="table table-striped table-bordered">

                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Year</th>
                        <th>Category</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($books as $book)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book['title'] }}</td>
                            <td>{{ $book['author'] }}</td>
                            <td>{{ $book['year'] }}</td>
                            <td>
                                <span class="badge bg-primary">
                                    {{ $book['category'] }}
                                </span>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="5" class="text-center">
                                No featured books available.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        <a href="{{ route('books.index') }}" class="btn btn-primary">
            Back to All Books
        </a>

    </div>

</div>

@endsection