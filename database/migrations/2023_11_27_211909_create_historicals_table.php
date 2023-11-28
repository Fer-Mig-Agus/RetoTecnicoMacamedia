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
        Schema::create('historicals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('status_id');
            $table->date('date');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicals');
    }
};
