<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the posts associatd with the tag
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
