<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned()->nullable(false)->default(0);
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('parent_id')->nullable(false)->default(0);
            $table->integer('user_id')->unsigned()->nullable(false)->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('content');
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
        Schema::dropIfExists('comments');
    }
}
