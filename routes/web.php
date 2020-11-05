<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = Article::all()->load('author');
//    $secondary = Article::all()->load('author')->slice(-3)->slice(0, 2);
    return view('index', ["articles" => $articles]);
})->name('app_index');

Route::get('/article', [ArticleController::class, 'index'])->name('article_list');

Route::get('/article/{id}', [ArticleController::class, 'details'])->name('article');

Route::get('/author/{id}', function () {
    $author = User::findOrFail(request('id'));

    return view('pages.author.index', ["author" => $author]);
})->name('author');
