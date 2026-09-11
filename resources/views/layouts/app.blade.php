<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body>

    <div class="container mt-4">

        <h1>My Library</h1>

        <p>Prepared by: Amor Tonio</p>

        @include('partials._nav')

        @yield('content')

    </div>

</body>
</html>