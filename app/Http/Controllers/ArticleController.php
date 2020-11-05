<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all()->load('author');
        return view('pages.articles.index', ["articles" => $articles]);
    }

    public function details()
    {
        $article = Article::findOrFail(request('id'))->load('author');
        return view('pages.articles.details', ["article" => $article]);
    }
}
