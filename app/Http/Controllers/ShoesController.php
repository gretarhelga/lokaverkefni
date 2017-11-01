<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function index()
    {
    	$msg = "virkar";
    	return view("shoes.index", compact("msg"));
    }
}
