<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    // Observer
    protected $table = 'posts';

    // This would prevent the user from "hacking your form".
    protected $fillable = [
        'id',
        'title',
        'body'
    ];

    // The Post belongs to the User.
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault('Admin User');
    }

    // The Post belongs to the Category.
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // The Tag belongs to the many Posts.
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
