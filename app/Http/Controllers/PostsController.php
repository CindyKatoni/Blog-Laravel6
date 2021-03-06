<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //Create method show
    public function show($slug)
    {
        // $post = \DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstorFail();
        // dd($post);
     
        return view('post', [
            'post' => $post]);
    }
}
