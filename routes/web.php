<?php

Auth::routes();

Route::get('/', function () {
    return redirect("/shoes");
});

Route::get("/shoes", "ShoesController@index");

Route::get("/add", "ShoesController@add");

Route::get('/home', 'HomeController@index')->name('home');
