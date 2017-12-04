<?php

namespace App\Http\Controllers;
use App\Shoe;
use Auth;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store($id)
    {
    	$shoe = Shoe::find($id);
    	$shoe->likes()->toggle(Auth::id());
        return back();
    }
}

/*https://laracasts.com/series/laravel-from-scratch-2017/episodes/30
https://laravel.com/docs/5.4/eloquent-relationships#updating-many-to-many-relationships*/