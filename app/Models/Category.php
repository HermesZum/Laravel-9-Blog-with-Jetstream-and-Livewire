<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    // Observer
    protected $table = 'categories';

    // This would prevent the user from "hacking your form".
    protected $fillable = [
        'name',
        'slug'
    ];

    // The Category belongs to the many Posts.
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
