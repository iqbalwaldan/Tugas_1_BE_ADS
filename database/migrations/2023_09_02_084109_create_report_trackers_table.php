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
        Schema::create('report_trackers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('report_id');
            $table->string('status');
            $table->text('note');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('report_id')->references('id')->on('reports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_trackers');
    }
};
