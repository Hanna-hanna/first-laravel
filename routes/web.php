<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    $tags = ['learning', 'programming', 'oop', 'php'];
    return view('about', ['tags' => $tags]);
});

Route::get('/articles', function () {
    $articles = App\Models\Article::all();
    return view('articles', ['articles' => $articles]);
});