<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>

    <h1>Movie Details</h1>

    <p><strong>Full Name:</strong> Aira Basco</p>

    <p><strong>ID:</strong> {{ $movie['id'] }}</p>
    <p><strong>Title:</strong> {{ $movie['title'] }}</p>
    <p><strong>Director:</strong> {{ $movie['director'] }}</p>
    <p><strong>Genre:</strong> {{ $movie['genre'] }}</p>
    <p><strong>Year:</strong> {{ $movie['year'] }}</p>

    <br>

    <a href="/movies">← Back to Movies</a>

</body>
</html>