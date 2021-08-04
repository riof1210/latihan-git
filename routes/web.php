<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Rio Fadli",
        "email" => "riof@gmail.com"
    ]);
});

Route::get('/posts', function () {
    return view('posts');
});
