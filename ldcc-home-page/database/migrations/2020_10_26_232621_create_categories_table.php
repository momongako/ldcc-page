<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('categories', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->string('name');
        //    $table->string('slug')->nullable();
        //    $table->tinyInteger('status')->default(1);
        //    $table->tinyInteger('type')->default(1);
        //    $table->integer('parent_id')->nullable();
        //    $table->string('path')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
