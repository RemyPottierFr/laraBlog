<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function upload($file)
    {
        $filename = uniqid() . "." . $file->extension();

        Storage::disk('public')->putFileAs(
            'files/',
            $file,
            $filename
        );

        return '/files/' . $filename;
    }

    public function index()
    {
        $articles = Article::all()->sortByDesc('id')->load('author');
        return view('pages.articles.index', ["articles" => $articles]);
    }

    public function home()
    {
        $articles = Article::all()->load('author');
        return view('index', ["articles" => $articles]);
    }

    public function details()
    {
        $article = Article::findOrFail(request('id'))->load('author');
        return view('pages.articles.details', ["article" => $article]);
    }

    public function create()
    {
        return view('pages.articles.add');
    }

    public function create_process(Request $request)
    {
        $request->validate([
            "title" => ["required", "max:100"],
            "picture" => ["required", "file"],
            "description" => ["required", "max:255"],
            "content" => ["required"]
        ]);

        $picture = $this->upload($request->file('picture'));

        var_dump($picture);

        $article = new Article([
            "title" => request('title'),
            "picture" => $picture,
            "description" => request('description'),
            "content" => request('content'),
            "author_id" => auth()->id(),
        ]);

        $article->save();

        return redirect('/dashboard');
    }

    public function delete()
    {
        Article::destroy(request('id'));
        return redirect(route('dashboard'));
    }
}
