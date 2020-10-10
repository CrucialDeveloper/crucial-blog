<?php

namespace CrucialDeveloper\CrucialBlog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $dates = ['published_at'];
    protected $guarded = [];
}
