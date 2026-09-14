<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Product System')</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Shella Product Suystem</h1>
    </header>

    @include('partials._nav')

    <main class="container my-4">
        @yield('content')
    </main>

</body>
</html>