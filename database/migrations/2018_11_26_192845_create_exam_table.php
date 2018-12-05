<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->increments('id');

            $table->string('exam_title');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('session_id');
            $table->string('details');
            $table->string('csheet_position');
            $table->string('csheet_sort');
            $table->string('msheet_position');
            $table->string('msheet_sort');
            $table->integer('msheet_show_photo');
            $table->integer('msheet_show_principal_signature');
            $table->integer('msheet_show_student_grade');
            $table->integer('msheet_show_pass_fail');
            $table->integer('msheet_show_date');
            $table->integer('msheet_show_url');
            $table->date('result_date');
            $table->integer('formula_on_result');
         




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
        Schema::dropIfExists('exam');
    }
}
