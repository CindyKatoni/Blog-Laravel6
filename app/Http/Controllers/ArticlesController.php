<?php

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //Render a list of a resource
    public function index()
    {
        $articles = Article::take(4)->latest()->get();

        // return $articles;

        return view('article', compact('articles'));

    }
    
    
    //Show a single resource
    public function show($articleId)
    {
        
        $article = Article::find($articleId);

        return $article;

        return view('articles.show');
        // dd($article);

    }

    public function create()
    {
        //Shows a view to create a new resource
        return view('articles/create');
    }

    public function store()
    {
        //Persist a resource
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/article');
    }

    public function edit()
    {
        //Shows a view to edit an existing resource
    }

    public function update()
    {
        //Persist the edited resource
    }

    public function delete()
    {
        //Delete the resource
    }
}
