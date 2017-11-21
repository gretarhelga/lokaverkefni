<?php

Auth::routes();

Route::get('/', function () {
    return redirect("/shoes");
});


Route::get("/shoes", "ShoesController@index");

Route::get("shoes/add", "ShoesController@add");

Route::post("/shoes", "ShoesController@store");

Route::get("/shoes/{id}", "ShoesController@show");

Route::delete("/shoes", "ShoesController@deleteShoe");

Route::get("/user/{id}", "UsersController@show");

Route::get('/home', 'HomeController@index')->name('home');
