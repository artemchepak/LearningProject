<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\MovieCategory;
use Illuminate\Database\Seeder;

class Test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'country' => 'USA',
                'release_year' => '1994',
                'genre' => 'Drama',
                'description' => "Andy Dufresne (Tim Robbins) is sentenced to two consecutive life terms in prison for the murders of his wife and her lover and is sentenced to a tough prison. However, only Andy knows he didn't commit the crimes. While there, he forms a friendship with Red (Morgan Freeman), experiences brutality of prison life, adapts, helps the warden, etc., all in 19 years."
            ]
        ];

        $movie = new Movie();
        $movie->insert($movies);
        $categories = MovieCategory::where('name', $movies[0]['genre'])->get();
        $movie->categories()->attach($categories);
    }
}
