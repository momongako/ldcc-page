<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('relation_posts', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->integer('post_id')->unsigned()->index();
        //    $table->integer('relation_post_id')->unsigned()->index();
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation_posts');
    }
}
