<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MovieCharacter extends Model
{
    use HasFactory;
    protected $table = 'movie_characters';

    protected $fillable = [
        'movie_id',
        'actor_id',
        'character_name'
    ];

    /**
     * Get the actor associated with the MovieCharacter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actor(): HasOne
    {
        return $this->hasOne(Actor::class, 'id', 'actor_id');
    }

    /**
     * Get the movie that owns the MovieCharacter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }
}
