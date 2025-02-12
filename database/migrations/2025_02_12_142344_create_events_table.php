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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_code')->unique();
            $table->string('event_title');
            $table->date('event_date');
            $table->text('event_description');
            $table->string('event_banner')->nullable();
            $table->time('time_in_open_am')->nullable();
            $table->time('time_in_close_am')->nullable();
            $table->time('time_out_open_am')->nullable();
            $table->time('time_out_close_am')->nullable();
            $table->time('time_in_open_pm')->nullable();
            $table->time('time_in_close_pm')->nullable();
            $table->time('time_out_open_pm')->nullable();
            $table->time('time_out_close_pm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
