<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('menus', function (Blueprint $table) {
        //    $table->increments('id');
        //    $table->string('name');
        //    $table->string('link');
        //    $table->tinyInteger('status')->default(1);
        //    $table->tinyInteger('type')->default(1);
        //    $table->integer('parent_id')->default(0);
        //    $table->integer('sort_number')->default(0);
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
        Schema::dropIfExists('menus');
    }
}
