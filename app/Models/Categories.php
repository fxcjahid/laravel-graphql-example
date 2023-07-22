<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'user_id',
        'slug',
    ];

    /**
     * get user data
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * get post data
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_categories');
    }
}
