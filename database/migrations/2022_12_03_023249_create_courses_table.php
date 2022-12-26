<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
            $table->string('course_code');
            $table->string('course_name');
            $table->tinyInteger('course_share');
            $table->integer('course_class');
            $table->text('course_title');
            $table->string('course_image');
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
        Schema::dropIfExists('courses');
    }
}
