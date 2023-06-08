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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->unsignedBigInteger('stackholder');
            $table->unsignedBigInteger('PIC');
            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->enum('status', ['queue', 'preparation' . 'onprogess', 'done' , 'notavailable'])->default('queue');
            $table->timestamps();

            $table->foreign('stackholder')->references('id')->on('users');
            $table->foreign('PIC')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
