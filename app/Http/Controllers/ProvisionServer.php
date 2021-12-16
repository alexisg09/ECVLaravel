<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProvisionServer extends Controller
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
        return view('welcome', ['article' => $article]);

    }

    public function showAll()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);

    }


}
