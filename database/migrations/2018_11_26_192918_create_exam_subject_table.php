<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_subject', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('cs_id');
            $table->integer('exam_id');
            $table->integer('max_marks');
            $table->integer('min_marks');
            $table->date('dated');
            $table->integer('result');
            $table->integer('section_id');
            $table->integer('subject_id');
            $table->integer('calculate');
            $table->integer('ordering');
         
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
        Schema::dropIfExists('exam_subject');
    }
}
