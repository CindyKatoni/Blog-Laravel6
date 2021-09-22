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

// //Create service container
// app()->bind('example', function() {
//     return new \App\Example();
// });

//fetch the service using resolve helper function 

Route::get('/', function(){
    // return view('welcome');
    $example = resolve(App\Example::class);
    ddd($example);
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
