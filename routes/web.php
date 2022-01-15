<?php

use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::resource('posts', PostController::class);
Route::get('posts/{post:slug}', [PostController::class, 'show'])
    ->name('posts.show');

//Route::get('/authors', function () {
//    return view('authors', [
//        "title" => 'Post Authors',
//        "authors" => Author::all()
//    ]);
//});

Route::get('/categories', function () {
    return view('categories', [
        "title" => 'Post Categories',
        "categories" => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category','author'),
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

Route::get('/author', function () {
    return view('author', [
        "title" => 'Author',

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fauzan Alghifari",
        "email" => "fauzanalghifari007@gmail.com",
        "image" => "avatar.png"
    ]);
});

Route::get('/kuis1', function () {
    return view('kuis2', [
        "title" => "Kuis 2"
    ]);
});

Route::get('/kuis2', function () {
    return view('kuis2', [
        "title" => "Kuis 2"
    ]);
});

Route::get('/kuis3', function () {
    return view('kuis3', [
        "title" => "Kuis 3"
    ]);
});
