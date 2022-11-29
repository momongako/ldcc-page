<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::table('users', function (Blueprint $table) {
        //    $table->string('first_name')->nullable();
        //    $table->string('last_name')->nullable();
        //    $table->smallInteger('year_of_birth')->nullable();
        //    $table->string('province', 20)->nullable();
        //    $table->tinyInteger('gender')->nullable();
        //    $table->tinyInteger('subscribe_flag')->nullable();
        //    $table->dateTime('subscribe_at')->nullable();
        //    $table->dateTime('unsubscribe_at')->nullable();
        //    $table->softDeletes();
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
