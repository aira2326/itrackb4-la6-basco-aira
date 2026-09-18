<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container">

        <a class="navbar-brand" href="{{ route('movies.index') }}">
            Movies
        </a>

        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('movies.index') }}">
                All Movies
            </a>

            <a class="nav-link" href="{{ route('movies.featured') }}">
                Featured Movie
            </a>
        </div>

    </div>
</nav>