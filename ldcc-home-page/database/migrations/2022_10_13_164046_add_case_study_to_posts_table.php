<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaseStudyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('case_name')->nullable();
            $table->text('case_description')->nullable();
            $table->text('our_client')->nullable();
            $table->text('challenges_and_needs')->nullable();
            $table->text('our_work')->nullable();
            $table->text('outcome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('case_name');
            $table->string('case_description');
            $table->string('our_client');
            $table->string('challenges_and_needs');
            $table->string('our_work');
            $table->string('outcome');
        });
    }
}
