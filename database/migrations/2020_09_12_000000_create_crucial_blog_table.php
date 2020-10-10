<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrucialBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $name = null !== config('crucial-blog.database_table') ? config('crucial-blog.database_table') : 'posts';

        Schema::create($name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('body');
            $table->longText('excerpt');
            $table->string('byline');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
