<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Comment;
use Auth;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware("auth")->only("store");
    }

    public function store(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), [
            "text" => "required|max:50"
        ]);

         if ($validator->fails()) {
            return redirect("shoes/$id")
                ->withInput()
                ->withErrors($validator);
         }

        $comment = new Comment;
        $comment->text = $request->text;
        $comment->user_id = Auth::id();
        $comment->shoe_id = $id;
        $comment->save();

        return back();
    }
}
