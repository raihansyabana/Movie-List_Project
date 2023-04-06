<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MovieGenre extends Model
{
    use HasFactory;
    protected $table = 'movie_genres';

    protected $fillable = [
        'movie_id',
        'genre_id'
    ];

    /**
     * Get the genre associated with the MovieGenre
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genre(): HasOne
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }
}
