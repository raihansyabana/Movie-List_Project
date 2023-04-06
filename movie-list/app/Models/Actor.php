<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Actor extends Model
{
    use HasFactory;
    protected $table = 'actors';

    protected $fillable = [
        'name',
        'gender',
        'biography',
        'dob',
        'pob',
        'image',
        'popularity'
    ];

    /**
     * Get all of the movies for the Actor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(MovieCharacter::class, 'actor_id', 'id');
    }
}
