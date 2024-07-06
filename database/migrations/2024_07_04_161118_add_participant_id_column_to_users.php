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
        Schema::table('users', function (Blueprint $table) {
            $table->string('code_participant');
            $table->string('title')->nullable();
            $table->string('specialization')->nullable();
            $table->string('name_on_certificate')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('state')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('phone_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('code_participant');
            $table->dropColumn('title');
            $table->dropColumn('specialization');
            $table->dropColumn('name_on_certificate');
            $table->dropColumn('country');
            $table->dropColumn('province');
            $table->dropColumn('state');
            $table->dropColumn('address');
            $table->dropColumn('postal_code');
            $table->dropColumn('phone_number');
        });
    }
};
