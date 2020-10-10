<?php

namespace CrucialDeveloper\CrucialBlog;

use Illuminate\Routing\Controller;
use CrucialDeveloper\CrucialBlog\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('crucial-blog::index', [
            'posts' => Post::all()
        ]);
    }
}
