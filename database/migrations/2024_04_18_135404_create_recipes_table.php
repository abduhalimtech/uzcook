<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('diet_id')->constrained('diets', 'id')->onDelete('cascade');
            $table->string('name');
            $table->integer('prep_time');
            $table->text('cooking_instructions');
            $table->string('difficulty');
            $table->string('cuisine');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
