<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Shoe;
use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);

        $shoes = Shoe::where("user_id", "=", $id)->get();


        return view("users.user", compact("user", "shoes"));
    } 
}
