<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
        $table->id('quiz_id');
        $table->unsignedBigInteger('course_id');
        $table->foreign('course_id')->references('course_id')->on('courses');
        $table->string('quiz_name');
        $table->string('quiz_by');
        $table->integer('time');
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
        Schema::dropIfExists('quiz');
    }
}
