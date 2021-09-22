<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', 'PagesController@home');

Route::get('/', function(){
    return view('welcome');
});


Route::get('/test', function() {
    return view('test');
});

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

 //Using HTTP Verbs for routing

 //Using Route names.
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
