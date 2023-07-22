<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'text',
        'status',
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
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
