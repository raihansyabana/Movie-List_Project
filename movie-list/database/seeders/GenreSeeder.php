<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Comedy'
        ]);

        Genre::create([
            'name' => 'Crime'
        ]);

        //3
        Genre::create([
            'name' => 'Drama'
        ]);

        //4
        Genre::create([
            'name' => 'Thriller'
        ]);

        //5
        Genre::create([
            'name' => 'Fantasy'
        ]);

        //6
        Genre::create([
            'name' => 'Mystery'
        ]);

        //7
        Genre::create([
            'name' => 'Sci-Fi'
        ]);

        //8
        Genre::create([
            'name' => 'Adventure'
        ]);

        //9
        Genre::create([
            'name' => 'Action'
        ]);
    }
}
