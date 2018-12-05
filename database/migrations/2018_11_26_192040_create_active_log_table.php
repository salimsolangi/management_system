<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_log', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('admin_id');
            $table->string('ip_address');
            $table->string('controller');
            $table->string('action');
            $table->string('get_data');
            $table->string('post_data');
            
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
        Schema::dropIfExists('active_log');
    }
}
