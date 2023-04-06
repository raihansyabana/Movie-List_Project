<?php

namespace Database\Seeders;

use App\Models\MovieCharacter;
use Illuminate\Database\Seeder;

class MovieCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 1,
            'character_name' => 'Wednesday Addams'
        ]);
        
        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 2,
            'character_name' => 'Enid Sinclair'
        ]);

        MovieCharacter::create([
            'movie_id' => 1,
            'actor_id' => 3,
            'character_name' => 'Tyler Galpin'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 4,
            'character_name' => 'John Wick'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 5,
            'character_name' => 'Viggo Tarasov'
        ]);

        MovieCharacter::create([
            'movie_id' => 2,
            'actor_id' => 6,
            'character_name' => 'Marcus'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 7,
            'character_name' => 'Winston'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 8,
            'character_name' => 'Cassian'
        ]);

        MovieCharacter::create([
            'movie_id' => 3,
            'actor_id' => 9,
            'character_name' => 'Charon'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 10,
            'character_name' => 'The Adjudicator'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 11,
            'character_name' => 'Bowery King'
        ]);

        MovieCharacter::create([
            'movie_id' => 4,
            'actor_id' => 12,
            'character_name' => 'Sofia'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 13,
            'character_name' => 'Capt. Pete \'Maverick\' Mitchell'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 14,
            'character_name' => 'Penny Benjamin'
        ]);

        MovieCharacter::create([
            'movie_id' => 5,
            'actor_id' => 15,
            'character_name' => 'Lt. Bradley \'Rooster\' Bradshaw'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 16,
            'character_name' => 'Peter Parker'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 17,
            'character_name' => 'Quentin Beck'
        ]);

        MovieCharacter::create([
            'movie_id' => 6,
            'actor_id' => 18,
            'character_name' => 'Nick Fury'
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 18,
            'character_name' => 'Doctor Strange'
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 20,
            'character_name' => 'MJ'
        ]);

        MovieCharacter::create([
            'movie_id' => 7,
            'actor_id' => 21,
            'character_name' => 'Ned Leeds'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 22,
            'character_name' => 'Benoit Blanc'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 23,
            'character_name' => 'Ransom Drysdale'
        ]);

        MovieCharacter::create([
            'movie_id' => 8,
            'actor_id' => 24,
            'character_name' => 'Harlan Thrombey'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 28,
            'character_name' => 'Seong Gi-hun'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 29,
            'character_name' => 'Cho Sang-woo'
        ]);

        MovieCharacter::create([
            'movie_id' => 9,
            'actor_id' => 30,
            'character_name' => 'Kang Sae-byeok'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 25,
            'character_name' => 'Sean Boswell'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 26,
            'character_name' => 'Han'
        ]);

        MovieCharacter::create([
            'movie_id' => 10,
            'actor_id' => 27,
            'character_name' => 'Drift King'
        ]);
    }
}
