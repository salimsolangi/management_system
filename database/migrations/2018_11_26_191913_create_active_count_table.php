<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveCountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_count', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->date('date');
            $table->integer('active');
            $table->integer('inactive');
            $table->string('remarks');
                    

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
        Schema::dropIfExists('active_count');
    }
}
