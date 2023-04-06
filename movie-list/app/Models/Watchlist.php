<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Watchlist extends Model
{
    use HasFactory;
    protected $table = 'watchlists';

    protected $fillable = [
        'user_id',
        'movie_id',
        'status'
    ];

    /**
     * Get the movie associated with the Watchlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movie(): HasOne
    {
        return $this->hasOne(Movie::class, 'id', 'movie_id');
    }
}
