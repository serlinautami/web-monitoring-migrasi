<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('ip_server')->nullable();
            $table->string('status_migrasi')->nullable();
            $table->string('status_upload')->nullable();
            $table->string('status_running')->nullable();
            $table->integer('jumlah_job_ssis')->default(0);
            $table->string('staging')->nullable();
            $table->integer('total_connect')->default(0);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
}
