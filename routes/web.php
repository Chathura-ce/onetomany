<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    $user = User::findOrFail(1);
//    $post = new Post(['title'=>'php','body'=>'this is a body']);
//    $user->posts()->save($post);

//    or
    
    $user->posts()->save( new Post(['title'=>'php','body'=>'this is a body 2']));
});
