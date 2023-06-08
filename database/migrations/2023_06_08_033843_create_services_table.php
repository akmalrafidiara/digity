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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('caption')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('pin', ['yes', 'no'])->default('no');
            $table->unsignedInteger('price_min');
            $table->unsignedInteger('price_max')->nullable();
            $table->enum('status', ['available', 'not-available'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
