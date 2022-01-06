<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return $articles;
    }


    public function show($id)
    {
        $article = Article::find($id);
        return view('article', ['article' => $article]);
    }

    public function admin_show($id)
    {
        $article = Article::find($id);
        return view('update', ['article' => $article]);
    }

    public function showAll()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);

    }


    public function create()
    {
        return view('create');
    }

    public function store($title, $description)
    {
        Article::create(['title' => $title, 'description' => $description]);
        return redirect('/articles/');

//        $this->showAll();
    }

    public function update(Request $request, $id)
    {
        $articleToUpdate = Article::find($id);
        $articleToUpdate->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        return redirect('/articles/');
    }

    public function delete($id)
    {
        $articleToDelete = Article::find($id);
        $articleToDelete->delete();
        return redirect('/articles/');

    }
}
