<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('account_id');
            $table->string('name');
            $table->string('cnic');
            $table->string('surname');
            $table->char('gender');
            $table->date('dob');
            $table->integer('id_number');
            $table->char('married');
            $table->integer('nationality');
            $table->integer('religion');
            $table->string('mobile');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('position');
            $table->integer('salary');
            $table->string('picture');
            $table->string('cvfile');
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
        Schema::dropIfExists('employee');
    }
}
