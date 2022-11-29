<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJobFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('position')->nullable()->after('id');
            $table->string('location')->nullable()->after('position');
            $table->string('levers')->nullable()->after('location');
            $table->string('levers_name')->nullable()->after('levers');
            $table->string('recruitment_office')->nullable()->after('levers_name');
            $table->string('recruitment_office_name')->nullable()->after('recruitment_office');
            $table->text('job_description')->nullable()->after('recruitment_office_name');
            $table->text('job_requirements')->nullable()->after('job_description');
            $table->string('start_date')->nullable()->after('job_requirements');
            $table->string('end_date')->nullable()->after('start_date');
        });
    }

    /**c
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('position');
            $table->string('location');
            $table->string('levers');
            $table->string('levers_name');
            $table->string('recruitment_office');
            $table->string('recruitment_office_name');
            $table->string('job_description');
            $table->string('job_requirements');
            $table->string('start_date');
            $table->string('end_date');
        });
    }
}
