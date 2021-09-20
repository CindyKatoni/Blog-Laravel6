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
    public function show($article)
    {
        
        $article = Article::findOrFail($article);

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
        //Create action saves and creates a resource all in one ego
        

        Article::create(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/article');
    }



    public function edit($id)
    {
        //Shows a view to edit an existing resource
        //Find the article associated with the id
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }



    public function update(Article $article)
    {
        //Update action edits and saves a resource all in one ego
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/article/' . $article->id);
    }

    public function delete()
    {
        //Delete the resource
    }

    // protected function validateArticle()
    // {
    //     return request()->validate([
    //         'title' => 'required',
    //         'excerpt' => 'required',
    //         'body' => 'required'

    //     ]);
    // }
}
