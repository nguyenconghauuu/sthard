<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseIndexContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_index_content', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('course_id')->on('course_index')->onDelete('cascade');
            $table->string('index_content');
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
        Schema::dropIfExists('course_index_content');
    }
}
