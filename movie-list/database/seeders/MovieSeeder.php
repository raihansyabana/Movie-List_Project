<?php

namespace Database\Seeders;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'Captain Marvel',
            'description' => 'Carol Danvers becomes one of the universe\'s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.',
            'director' => 'Anna Boden, Ryan Fleck',
            'release_date' => Carbon::make('2019-02-27'),
            'thumbnail' => 'images/thumbnail/CM-thumb.jpg',
            'background' => 'images/background/CM-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Everything Everywhere All at Once',
            'description' => 'An aging Chinese immigrant is swept up in an insane adventure, in which she alone can save the world by exploring other universes connecting with the lives she could have led.',
            'director' => 'Dan Kwan, Daniel Scheinert',
            'release_date' => Carbon::make('2022-03-11'),
            'thumbnail' => 'images/thumbnail/once-thumb.jpg',
            'background' => 'images/background/once-bg.jpg',
        ]);
        Movie::create([
            'title' => 'Knives Out',
            'description' => 'A detective investigates the death of the patriarch of an eccentric, combative family.',
            'director' => 'Rian Johnson',
            'release_date' => Carbon::make('2019-09-07'),
            'thumbnail' => 'images/thumbnail/ko-thumb.jpg',
            'background' => 'images/background/ko-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Puss in Boots: The Last Wish',
            'description' => 'Otto is a grump who\'s given up on life following the loss of his wife and wants to end it all. When a young family moves in nearby, he meets his match in quick-witted Marisol, leading to a friendship that will turn his world around.',
            'director' => 'Joel Crawford',
            'release_date' => Carbon::make('2022-12-13'),
            'thumbnail' => 'images/thumbnail/puss-thumb.jpg',
            'background' => 'images/background/puss-bg.jpg'
        ]);

        Movie::create([
            'title' => 'Sing 2',
            'description' => 'Buster Moon and his friends must persuade reclusive rock star Clay Calloway to join them for the opening of a new show.',
            'director' => 'Garth Jennings',
            'release_date' => Carbon::make('2021-12-22'),
            'thumbnail' => 'images/thumbnail/sing-thumb.jpg',
            'background' => 'images/background/sing-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Aftersun',
            'description' => 'Sophie reflects on the shared joy and private melancholy of a holiday she took with her father twenty years earlier. Memories real and imagined fill the gaps between as she tries to reconcile the father she knew with the man she didn\'t.',
            'director' => 'Charlotte Wells',
            'release_date' => Carbon::make('2022-05-21'),
            'thumbnail' => 'images/thumbnail/aftersun-thumb.jpg',
            'background' => 'images/background/aftersun-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Fantastic Beasts and Where to Find Them',
            'description' => 'The adventures of writer Newt Scamander in New York\'s secret community of witches and wizards seventy years before Harry Potter reads his book in school.',
            'director' => 'David Yates',
            'release_date' => Carbon::make('2016-11-10'),
            'thumbnail' => 'images/thumbnail/fantastic-thumb.jpg',
            'background' => 'images/background/fantastic-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Mary Poppins Returns',
            'description' => 'A few decades after her original visit, Mary Poppins, the magical nanny, returns to help the Banks siblings and Michael\'s children through a difficult time in their lives.',
            'director' => 'Rob Marshall',
            'release_date' => Carbon::make('2018-11-29'),
            'thumbnail' => 'images/thumbnail/mary-thumb.jpg',
            'background' => 'images/background/mary-bg.jpg',
        ]);

        Movie::create([
            'title' => 'Nanny McPhee and the Big Bang',
            'description' => 'Nanny McPhee arrives to help a harried young mother who is trying to run the family farm while her husband is away at war, though she uses her magic to teach the woman\'s children and their two spoiled cousins five new lessons.',
            'director' => 'Susanna White',
            'release_date' => Carbon::make('2010-03-26'),
            'thumbnail' => 'images/thumbnail/nanny-thumb.jpg',
            'background' => 'images/background/nanny-bg.jpg',
        ]);

        Movie::create([
            'title' => 'The Amazing Spider-Man',
            'description' => 'After Peter Parker is bitten by a genetically altered spider, he gains newfound, spider-like powers and ventures out to save the city from the machinations of a mysterious reptilian foe.',
            'director' => 'Marc Webb',
            'release_date' => Carbon::make('2012-07-03'),
            'thumbnail' => 'images/thumbnail/amazing-thumb.jpg',
            'background' => 'images/background/amazing-bg.jpg',
        ]);
    }
}