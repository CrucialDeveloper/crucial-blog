<?php

use Illuminate\Support\Facades\Route;
use CrucialDeveloper\CrucialBlog\PostController;



Route::prefix(null !== config('crucial-blog.route_path') ? config('crucial-blog.route_path') : 'blog')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('{post:slug}', [PostController::class, 'show']);
});
