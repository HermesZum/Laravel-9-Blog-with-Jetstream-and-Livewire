<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    // Observer
    protected $table = 'tags';

    // This would prevent the user from "hacking your form".
    protected $fillable = [
        'name',
        'slug'
    ];

    // Posts belongs to many Tags.
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
