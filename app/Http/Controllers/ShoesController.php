<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\Shoe;
use Auth;

class ShoesController extends Controller
{
    public function index()
    {
        $shoes = Shoe::orderBy("created_at","desc")->get();

    	return view("shoes.index", compact("shoes"));
    }

    public function add()
    {
    	return view("shoes.addShoes");
    }

    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
            "brand" => "required|max:50",
            "color" => "required|max:50",
            "size" => "required|numeric",
            "price" => "required|numeric"
        ]);

         if ($validator->fails()) {
            return redirect("shoes/add")
                ->withInput()
                ->withErrors($validator);
         }

        $shoe = new Shoe;
        $shoe->brand = $request->brand;
        $shoe->size = $request->size;
        $shoe->color = $request->color;
        $shoe->price = $request->price;
        $shoe->user_id = Auth::id();
        $shoe->save();

        return redirect("/shoes");
    }
}
