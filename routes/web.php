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

Route::get('/posts/{post}', function($post){
    $posts = [
        'my_first_post' => 'This is the first post',
        'my_second_post' => 'This is the second post',
    ];

    return view('post', [
        'post' => $posts[$post]]);
});






Route::get('/test', function() {
    return view('test');
});