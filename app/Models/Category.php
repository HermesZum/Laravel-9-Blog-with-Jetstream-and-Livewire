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
        'slug',
        'parent_id'
    ];

    // The Category belongs to the many Posts.
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    // The Subcategories belong to the many Categories.
    public function subCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id')->with('categories');
    }
}
