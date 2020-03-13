<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->unsignedBigInteger('students_id');
            $table->unsignedBigInteger('teachers_id');
            $table->unsignedBigInteger('courses_id');
            $table->string('comments');
            $table->timestamps();
      
            $table->foreign('students_id')->references('id')->on('students');
            $table->foreign('teachers_id')->references('id')->on('teachers');
            $table->foreign('courses_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
