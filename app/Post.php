<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'user_id'];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->morphToMany('App\User', 'likeable')->whereDeletedAt(null);
    }

    public function getIsLikedAttribute()
    {
        $like = $this->likes()->whereUserId(Auth::id())->first();

        return (! is_null($like)) ? true : false;
    }

    // public function getLikesCountAttribute()
    // {
        // $like = $this->likes()->whereUserId(Auth::id())->first();
        // return (!is_null($like)) ? true : false;
    // }
}
