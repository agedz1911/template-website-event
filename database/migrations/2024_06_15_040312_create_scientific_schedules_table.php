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
        Schema::create('scientific_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('session')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('title')->nullable();
            $table->foreignId('facuty_id')->constrained('faculties')->nullable();
            $table->boolean('is_published')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scientific_schedules');
    }
};
