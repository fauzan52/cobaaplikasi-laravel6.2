<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::latest()->get();
        return view('posts', [
            "title" => "All Posts",

            "posts" => Post::with (['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        // dd($post->category()->toArray());
        return view('post', [
            'title' => 'Single Post',

            'post' => $post
        ]);
    }
}
