@extends('layouts.app')

@section('title', 'Book List')

@section('content')

<div class="card shadow-sm">

    <div class="card-body">

        <h2 class="mb-3">Books in the Library</h2>

        <p class="text-muted">
            Here is the list of available books.
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
                        <th>Action</th>
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
                                @if ($book['category'] === 'Fantasy')
                                    <span class="badge bg-primary">
                                        Fantasy
                                    </span>
                                @else
                                    <span class="badge bg-secondary">
                                        {{ $book['category'] }}
                                    </span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('books.show', $book['id']) }}"
                                   class="btn btn-sm btn-outline-primary">
                                    View
                                </a>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="text-center">
                                No books are currently available.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection