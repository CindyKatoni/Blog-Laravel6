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
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/article');
    }






    public function edit($id)
    {
        //Shows a view to edit an existing resource
        //Find the article associated with the id
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }



    public function update($id)
    {
        //Persist the edited resource
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/article/' .$article->id);
    }

    public function delete()
    {
        //Delete the resource
    }
}
