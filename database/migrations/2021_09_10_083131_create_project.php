<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('project_name')->nullable();
            $table->string('notes')->nullable();
            $table->string('staging')->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_running')->nullable();
            $table->string('status_import')->nullable();
            $table->timestamps();
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('project_id');
            $table->string('job_name')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::create('job_steps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('job_id');
            $table->string('job_step_name')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });


        // relations
        Schema::table('jobs', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
        });

        Schema::table('job_steps', function(Blueprint $table) {
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
