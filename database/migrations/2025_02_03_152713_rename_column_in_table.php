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
            $table->renameColumn('admin_issued_name', 'admin_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('borrowed', function (Blueprint $table) {
            $table->renameColumn('admin_id', 'admin_issued_name');
        });
    }
};
