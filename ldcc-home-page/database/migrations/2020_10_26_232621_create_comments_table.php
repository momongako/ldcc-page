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
        //Schema::create('comments', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->integer('parent_id')->nullable();
        //    $table->integer('post_id')->nullable();
        //    $table->integer('ad_id');
        //    $table->string('ad_name')->nullable();
        //    $table->text('content');
        //    $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('comments');
    }
}
