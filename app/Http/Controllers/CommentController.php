<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {

        $comment = new Comment;
        $comment->text = $request->text;
        $comment->user_id = Auth::id();
        $comment->shoe_id = $id;
        $comment->save();

        return back();
    }
}
