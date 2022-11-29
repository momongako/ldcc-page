<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('posts', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->integer('category_id')->nullable();
        //    $table->string('title');
        //    $table->string('sub_title');
        //    $table->text('content');
        //    $table->string('slug');
        //    $table->tinyInteger('status')->default(1);
        //    $table->tinyInteger('type')->default(1);
        //    $table->integer('created_by');
        //    $table->tinyInteger('created_by_type')->default(1);
        //    $table->timestamps();
        //});
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
