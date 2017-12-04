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
