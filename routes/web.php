<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');

  
// });

// Route::get('/posts/{post}', function($post){
//     $posts = [
//         'my_first_post' => 'This is the first post',
//         'my_second_post' => 'This is the second post',
//     ];

//     if(! array_key_exists ($post, $posts)){
//         abort(404, 'Sorry the page doesnt exist');
//     }
        
//     return view('post', [
//         'post' => $posts[$post]]);
// });


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



// Route::get('/article', function () {
//     $articles = App\Article::take(4)->latest()->get();

//     return $articles;

//     return view('article');
// });


Route::get('/article', 'ArticlesController@index');


Route::get('/article/{article}', 'ArticlesController@show');

