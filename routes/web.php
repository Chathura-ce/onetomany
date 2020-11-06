<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// insert data
Route::get('/create', function () {
    $user = User::findOrFail(1);
//    $post = new Post(['title'=>'php','body'=>'this is a body']);
//    $user->posts()->save($post);

//    or

    $user->posts()->save( new Post(['title'=>'php','body'=>'this is a body 2']));
});

//Reading data
Route::get('/read',function (){
    $user = User::findOrfail(1);

//    return $user->posts;
//    dd($user);
    foreach ($user->posts as $post){
        echo $post->title . "<br>";
    }
});

//Update data
Route::get('/update',function (){
   $user = User::find(1);
   $user->posts()->where('id',1)->update(['title'=>'1 new php title','body'=>'1 this is new body']);;
});
