<?php

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::take(4)->latest()->get();

        return $articles;

        return view('article');

    }
    
    
    
    public function show($articleId)
    {
        
        $article = Article::find($articleId);

        return $article;

        return view('articles.show');
        // dd($article);

    }
}
