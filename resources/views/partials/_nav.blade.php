<nav class="navbar navbar-expand-lg bg-light border-bottom mb-4">
    <div class="container">

        <a class="navbar-brand fw-bold"
           href="{{ route('movies.index') }}">
            My Movies
        </a>

        <div class="navbar-nav">

            <a class="nav-link"
               href="{{ route('movies.index') }}">
                Show Movies
            </a>

            <a class="nav-link"
               href="{{ route('movies.featured') }}">
                Featured Movie
            </a>

        </div>

    </div>
</nav>