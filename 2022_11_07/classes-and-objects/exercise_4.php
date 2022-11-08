<?php
class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title=$title;
        $this->studio=$studio;
        $this->rating=$rating;
    }

    public function getPG(array $movies): array
    {
        $filteredMovies = [];
        foreach ($movies as $movie) {
            if ($movie->rating == "PG") {
                $filteredMovies[] = $movie;
            }
        }
        return $filteredMovies;
    }
}

$moviesDb = [
    $casionRoyale = new Movie("Casino Royale", "Eon Produtions", "PG13"),
    $glass = new Movie("Glass", "Buena Vista International", "PG13"),
    $spiderMan = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];

print_r(Movie::getPG($moviesDb));