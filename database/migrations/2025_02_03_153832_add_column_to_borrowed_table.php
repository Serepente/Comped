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
        Schema::table('borrowed', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations (Rollback).
     */
    public function down(): void
    {
        Schema::table('borrowed', function (Blueprint $table) {
            // First, drop the foreign key constraint
            $table->dropForeign(['user_id']);

            // Then, drop the column
            $table->dropColumn('user_id');
        });
    }
};

