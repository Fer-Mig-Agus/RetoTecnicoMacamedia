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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('last_name',50);
            $table->bigInteger('dni')->unique();
            $table->bigInteger('phone')->unique();
            $table->bigInteger('bundle')->unique();
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('degree_id');
            $table->unsignedBigInteger('subject_id');
            $table->timestamps();

            $table->foreign('degree_id')->references('id')->on('degrees');
            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
