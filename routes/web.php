<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
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

// Restricted routes
Route::group([
    "middleware" => [AuthMiddleware::class]
], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/settings', [UserController::class, 'settings'])->name('user_settings');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('add_article');
    Route::post('/article/create', [ArticleController::class, 'create_process']);
    Route::post('/article/delete', [ArticleController::class, 'delete'])->name("article_delete");
});

// Normal routes
Route::get('/', [ArticleController::class, 'home'])->name('app_index');

Route::get('/article', [ArticleController::class, 'index'])->name('article_list');

Route::get('/article/{id}', [ArticleController::class, 'details'])->name('article');

Route::get('/author/{id}', [UserController::class, 'details'])->name('author');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_process']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_process']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
