<?php

use Illuminate\Support\Facades\Route;

//route resource

Route::get('/', function () {
    return redirect('/posts');
});
// 
Route::resource('/posts', \App\Http\Controllers\PostController::class);