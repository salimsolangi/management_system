<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackupfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backupfile', function (Blueprint $table) {
            $table->increments('id');

            $table->string('filename');
            $table->integer('site_id');
            $table->double('filesize');
            $table->string('archived_id');
            $table->string('job_id');
            $table->string('ext');
            $table->integer('status');
            
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
        Schema::dropIfExists('backupfile');
    }
}
