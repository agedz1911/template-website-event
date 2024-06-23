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
        Schema::table('schedule_sessions', function (Blueprint $table) {
            $table->unsignedBigInteger('moderator_id')->after('room');
            $table->foreign('moderator_id')->references('id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedule_sessions', function (Blueprint $table) {
            $table->dropColumn('moderator_id');
            $table->dropForeign(['moderator_id']);
        });
    }
};
