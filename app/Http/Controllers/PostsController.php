<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::limit(100)->get();
        return view('posts', compact('posts'));
    }

    public function cached()
    {
        $posts = Cache::remember('posts', 24*60, function () {
            return Post::limit(100)->get();
        });
        return view('posts', compact('posts'));
    }
}
