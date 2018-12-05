<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('id');


            $table->string('session_id');
            $table->date('dated');
            $table->string('detail');
            $table->string('misc_01');
            $table->string('misc_02');
            $table->date('due_date');
            $table->integer('fine');
            $table->integer('status');
            $table->integer('fine_applied');
            $table->integer('batch_id');
           
            $table->string('note');
         
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
        Schema::dropIfExists('fees');
    }
}
