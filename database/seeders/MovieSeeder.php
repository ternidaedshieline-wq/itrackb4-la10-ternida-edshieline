<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title' => 'The House of Us',
            'director' => 'Mae Cruz-Alviar',
            'genre' => 'Romance / Drama',
            'year' => 2018,
            'featured' => true,
            'description' => 'A romantic drama about love and family.'
        ]);

        Movie::create([
            'title' => 'Hello, Love, Again',
            'director' => 'Cathy Garcia-Sampana',
            'genre' => 'Romance',
            'year' => 2024,
            'featured' => true,
            'description' => 'A story about love and second chances.'
        ]);

        Movie::create([
            'title' => 'Barbie',
            'director' => 'Greta Gerwig',
            'genre' => 'Comedy / Self-help',
            'year' => 2023,
            'featured' => true,
            'description' => 'Barbie discovers the real world.'
        ]);

        Movie::create([
            'title' => 'Four Sisters and a Wedding',
            'director' => 'Cathy Garcia-Sampana',
            'genre' => 'Drama',
            'year' => 2013,
            'featured' => false,
            'description' => 'Four sisters reunite for a family wedding.'
        ]);

        Movie::create([
            'title' => 'Everything Everywhere All at Once',
            'director' => 'Daniel Kwan and Daniel Scheinert',
            'genre' => 'Sci-Fi',
            'year' => 2022,
            'featured' => true,
            'description' => 'A woman discovers multiple universes.'
        ]);

        Movie::create([
            'title' => 'Crazy Rich Asians',
            'director' => 'Jon M. Chu',
            'genre' => 'Romance',
            'year' => 2018,
            'featured' => false,
            'description' => 'A woman discovers her boyfriends wealthy family.'
        ]);

        Movie::create([
            'title' => 'Avengers: Endgame',
            'director' => 'Anthony and Joe Russo',
            'genre' => 'Action',
            'year' => 2019,
            'featured' => true,
            'description' => 'The Avengers attempt to save the universe.'
        ]);
    }
}
