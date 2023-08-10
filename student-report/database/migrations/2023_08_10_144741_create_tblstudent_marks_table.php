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
        Schema::create('tblstudent_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->integer('student_marks');
            $table->integer('exam_marks');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('tblstudents')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('tblsubjects')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblstudent_marks');
    }
};
