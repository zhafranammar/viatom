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
        Schema::create('see_the_atoms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('level')->unique();
            $table->string('description');
            $table->string('src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('see_the_atoms');
    }
};
