<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Create method show
    public function show($post)
    {
        $posts = [
                     'my_first_post' => 'This is the first post',
                     'my_second_post' => 'This is the second post',
                 ];
            
                 if(! array_key_exists ($post, $posts)){
                     abort(404, 'Sorry the page doesnt exist');
                 }
                    
                 return view('post', [
                     'post' => $posts[$post]]);
    }
}
