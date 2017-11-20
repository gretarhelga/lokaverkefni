<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
