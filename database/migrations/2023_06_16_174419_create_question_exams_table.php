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
        Schema::create('question_exams', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('option_true');
            $table->string('option_true_image')->nullable();
            $table->string('option_false_1');
            $table->string('option_false_1_image')->nullable();
            $table->string('option_false_2')->nullable();
            $table->string('option_false_2_image')->nullable();
            $table->string('option_false_3')->nullable();
            $table->string('option_false_3_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_exams');
    }
};
