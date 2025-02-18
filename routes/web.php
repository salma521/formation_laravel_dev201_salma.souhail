<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/home', function () {
//     return view('home');
// });

//Route::view('/home','home');

Route::get('/posts/{id}/{book}', function ($myid,$book) {
    return  "id:$myid post: $book" ;
});

//Route::view('/show','post.show');

Route::get('/show/{nbr}', function ($nbr) {
    $posts=[
        ['title' => 'laravel'],
        ['title' => 'laravel']
    ];
    return view('post.show', ["data" => $posts]);
});

//Route::get('/home ,HomeController@home') -> name('home');


Route::get('/home',[HomeController::class,'home']) -> name('home');

//formation laravel dev201 nom prenem