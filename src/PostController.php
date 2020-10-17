<?php

namespace CrucialDeveloper\CrucialBlog;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use CrucialDeveloper\CrucialBlog\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('crucial-blog::index', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Request $request, $slug)
    {

        $post = Post::where('slug', $slug)->first();
        return view('crucial-blog::show', [
            'post' => $post
        ]);
    }
}
