<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        $recent_posts = $posts
            ->where('id', '>=', 15)
            ->pluck('title', 'id')
            ->chunk(4);

//        dd($recent_posts->first());

        return view('posts', compact('posts', 'recent_posts'));
    }
}
