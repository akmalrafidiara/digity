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
        Schema::create('project_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->reference('project_id')->on('projects');
            $table->string('title');
            $table->string('type');
            $table->time('upload_time')->nullable();
            $table->date('upload_date')->nullable();
            $table->enum('status', ['queue', 'preparation' . 'onprogess', 'done' , 'needrevision'])->default('queue');
            $table->string('detail')->nullable();
            $table->text('caption')->nullable();
            $table->string('hashtag')->nullable();
            $table->string('revision')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_plans');
    }
};
