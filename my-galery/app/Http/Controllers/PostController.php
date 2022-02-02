<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        // $posts = Post::latest();

        // if (request('search')) {
        //     $posts->where('name', 'like', '%' . request('search') . '%');
        // }

        return view('home', [
            'categories' => Category::all(),
            'posts' => Post::latest()->filter(request(['search', 'user', 'category']))->paginate(16)
        ]);
    }
}
