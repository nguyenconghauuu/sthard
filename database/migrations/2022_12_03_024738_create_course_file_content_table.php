<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseFileContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_file_content', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('course_main_content')->onDelete('cascade');
            $table->string('chapter' , 255);
            $table->foreign('chapter')->references('chapter_content')->on('course_main_content')->onDelete('cascade');
            $table->string('link');
            $table->string('file_content');
            $table->string('taifs_file');
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
        Schema::dropIfExists('course_file_content');
    }
}
