<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];

    /**
     * get user's post data
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getProfilePictureAttribute()
    {
        return "https://www.austinchronicle.com/Images/Sponsored/1haleybrooks.jpg";
    }

    public function getBioAttribute()
    {
        return "Message me \"I'M NEW\" for some FREE fire content💦";
    }

    public function getViewTypeAttribute()
    {
        return "model";
    }

    public function getCoverAttribute()
    {
        return json_encode([
            "cover" => [
                "photo" => "...",
            ],
        ]);
    }

    public function getActivestatusAttribute()
    {
        return json_encode([
            "activestatus" => [
                "text"      => "Active now",
                "now"       => true,
                "timestamp" => 1660053206,
            ],
        ]);
    }

    public function getToolsAttribute()
    {
        return json_encode([
            "tools" => [
                "chat"      => true,
                "tips"      => true,
                "offer"     => 1,
                "subscribe" => false,
            ],
        ]);
    }

    public function getStaticsAttribute()
    {
        return json_encode([
            "statics" => [
                "post"  => "23k",
                "photo" => "422",
                "video" => "134",
                "fans"  => "42K",
                "likes" => 0,
            ],
        ]);
    }

}
