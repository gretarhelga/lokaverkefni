<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function comments()
    {
    	return $this->hasMany(Comment::class)->latest();
    }
    public function likes()
    {
    	return $this->belongsToMany(User::class);
    }
}