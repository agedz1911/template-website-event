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
        Schema::table('faculties', function (Blueprint $table) {
            $table->unsignedBigInteger('type_participant_id')->nullable();
            $table->foreign('type_participant_id')->references('id')->on('type_participants');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->dropForeign(['type_participant_id']);
            $table->dropColumn('type_participant_id');
        });
    }
};
