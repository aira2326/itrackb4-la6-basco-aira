<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'genre' => 'Sci-Fi',
                'year' => 2010,
            ],

            2 => [
                'id' => 2,
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'genre' => 'Action',
                'year' => 2008,
            ],

            3 => [
                'id' => 3,
                'title' => 'Interstellar',
                'director' => 'Christopher Nolan',
                'genre' => 'Sci-Fi',
                'year' => 2014,
            ],

            4 => [
                'id' => 4,
                'title' => 'The Matrix',
                'director' => 'The Wachowskis',
                'genre' => 'Sci-Fi',
                'year' => 1999,
            ],

            5 => [
                'id' => 5,
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'genre' => 'Crime',
                'year' => 1972,
            ],

            6 => [
                'id' => 6,
                'title' => 'Avengers: Endgame',
                'director' => 'Anthony Russo and Joe Russo',
                'genre' => 'Action',
                'year' => 2019,
            ],
        ];
    }

    public function index()
    {
        $movies = $this->getMovies();

        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        $movies = $this->getMovies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];

        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function featured()
    {
        $movies = $this->getMovies();

        $movie = $movies[3];

        return view('movies.show', [
            'movie' => $movie
        ]);
    }

    public function filter($genre = null)
    {
        $movies = $this->getMovies();

        if ($genre === null) {
            $filteredMovies = $movies;
            $message = 'All movies are shown.';
        } else {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if (strcasecmp($movie['genre'], $genre) === 0) {
                    $filteredMovies[] = $movie;
                }
            }

            $message = 'Showing movies with genre: ' . $genre;
        }

        return view('movies.filter', [
            'movies' => $filteredMovies,
            'message' => $message
        ]);
    }
}