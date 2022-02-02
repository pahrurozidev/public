<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $posts = Post::latest();
        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view("posts", [
            "title" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString(),
            "page" => $title
        ]);
    }

    public function show(Post $post)
    {
        return view("post", [
            "title" => "single post",
            "post" => $post
        ]);
    }
}
