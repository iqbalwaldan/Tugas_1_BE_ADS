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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reporter_id');
            $table->foreignId('category_id');
            $table->string('tiket_id');
            $table->string('title');
            $table->text('description');
            $table->string('status');
            $table->timestamps();
            $table->foreign('reporter_id')->references('id')->on('reporters'); 
            $table->foreign('category_id')->references('id')->on('categories'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
