<?php

use Illuminate\Support\Facades\Route;
use CrucialDeveloper\CrucialBlog\PostController;



Route::prefix(null !== config('crucial-blog.route_path') ? config('crucial-blog.route_path') : 'blog')->group(function () {
    Route::get('/', [PostController::class, 'index'])->middleware('web');
    Route::get('{slug}', [PostController::class, 'show'])->middleware('web');
});
