<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('borrowed', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('borrower_name');
            $table->string('borrowed_item')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('admin_issued_name')->nullable();
            $table->date('date_issued')->nullable();
            $table->date('return_date')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrowed');
    }
};
