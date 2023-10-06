<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students_info', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_surname');
            $table->string('father_phone');
            $table->string('subject');
            $table->string('course_day');
            $table->string('course_time_from');
            $table->string('course_time_to');
            $table->string('teacher_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_info');
    }
};
