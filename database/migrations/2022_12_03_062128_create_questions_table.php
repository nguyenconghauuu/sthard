<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
            $table->text('question_content');
            $table->text('answer_a');
            $table->text('answer_b');
            $table->text('answer_c');
            $table->text('answer_d');
            $table->integer('question_level');
            $table->integer('result');
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
        Schema::dropIfExists('questions');
    }
}
