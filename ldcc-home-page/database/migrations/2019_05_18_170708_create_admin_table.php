<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('admins', function (Blueprint $table) {
        //    $table->bigIncrements('id');
        //    $table->string('name');
        //    $table->string('email')->unique();
        //    $table->string('password');
        //    $table->tinyInteger('status')->default(1);
        //    $table->rememberToken();
        //    $table->timestamps();;
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
