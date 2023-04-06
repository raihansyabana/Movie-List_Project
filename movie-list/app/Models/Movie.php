<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    protected $fillable = [
        'title',
        'description',
        'director',
        'release_date',
        'thumbnail',
        'background'
    ];

    /**
     * Get all of the genres for the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function genres(): HasMany
    {
        return $this->hasMany(MovieGenre::class, 'movie_id', 'id');
    }

    /**
     * Get all of the actors for the Movie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actors(): HasMany
    {
        return $this->hasMany(MovieCharacter::class, 'movie_id', 'id');
    }
}
