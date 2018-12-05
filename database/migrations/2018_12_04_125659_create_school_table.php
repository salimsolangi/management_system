<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->string('banner_a4');
            $table->integer('added_by');
            $table->string('date_format');
            $table->string('time_format');
            $table->string('attendance_type');
           
            $table->string('logo');
            $table->string('banner');
            $table->integer('voucher_type_id');
            $table->date('trail_expiry');
            $table->integer('receipt');
            $table->string('config');
            $table->string('transport');
            $table->integer('transport_fee');
            $table->string('email');
           



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
        Schema::dropIfExists('school');
    }
}
