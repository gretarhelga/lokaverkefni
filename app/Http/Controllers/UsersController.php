<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Shoe;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($name)
    {
        $user = User::find($name);
        $shoes = Shoe::find("id");





        return view("shoes.user", compact("user", "shoes"));
    } 
}
