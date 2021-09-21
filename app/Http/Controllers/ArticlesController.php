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

        return view('articles.index', compact('articles'));

    }
    
    
    //Show a single resource
    public function show($article)
    {
        
        $article = Article::findOrFail($article);

        return view('articles.show')->with('article' , $article);
        

    }

    public function create()
    {
        //Shows a view to create a new resource
        return view('articles/create');
    }

    public function store()
    {
        //Create action saves and creates a resource all in one ego
        

        Article::create(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles');
    }



    public function edit($article)
    {
        //Shows a view to edit an existing resource
        //Find the article associated with the id
        $article = Article::find($article);

        return view('articles.edit')->with('article' , $article);
    }



    public function update(Article $article)
    {
        //Update action edits and saves a resource all in one go
        
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        
        return redirect('/articles/' .$article->id);

    }



    public function delete()
    {
        //Delete the resource
    }

    
}
