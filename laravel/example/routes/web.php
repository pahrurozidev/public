<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\State;

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

Route::get("/", function () {
    return view("home", [
        "title" => "home"
    ]);
});

Route::get("/about", function () {
    return view("about", [
        "title" => "about",
        "profile" => [
            "name" => "Pahrurozi",
            "email" => "pahrurozi17@gmail.com",
            "image" => "img1.jpeg"
        ]
    ]);
});

Route::get("/blog", [PostController::class, 'index']);

Route::get("/posts/{post:slug}", [PostController::class, 'show']);

// category
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         "title" => $category->name,
//         "posts" => $category->posts->load('author', 'category'),
//         "category" => $category->name,
//         "page" => "Posts by category"
//     ]);
// });

// categories
Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "categories" => Category::all()
    ]);
});

// author
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => $author->name,
//         'posts' => $author->posts->load('author', 'category'),
//         "page" => "Posts by author"
//     ]);
// });

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
