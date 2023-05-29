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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('author');
            $table->foreignId('publisher_id')->references('id')->on('publishers');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->string('synopsis');
            $table->unsignedBigInteger('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
