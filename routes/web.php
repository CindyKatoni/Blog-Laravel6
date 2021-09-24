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

// Route::get('/contact', function(){
//     return view('contact');
// });

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
Route::get('/payments/create', 'PaymentController@create')->middleware('auth');
Route::post('/payments', 'PaymentController@store')->middleware('auth');
Route::get('notifications', 'UserNotificationController@show')->middleware('auth');
Route::get('conversations', 'ConversationController@index');
Route::get('conversations/{conversation}', 'ConversationController@show');
// Route::get('conversations/{conversation}', 'ConversationController@show')->middleware('can:view,conversation');
Route::post('/best-replies/{reply}', 'ConversationBestReplyController@store');


 //Using HTTP Verbs for routing

 //Using Route names.
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
