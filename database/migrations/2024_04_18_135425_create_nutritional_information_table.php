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
        Schema::create('nutritional_information', function (Blueprint $table) {
            $table->foreignId('recipe_id')->constrained('recipes', 'id')->onDelete('cascade');
            $table->integer('calories');
            $table->decimal('protein', 5, 2);
            $table->decimal('carbohydrates', 5, 2);
            $table->decimal('fats', 5, 2);
            $table->decimal('fiber', 5, 2);
            $table->decimal('sugar', 5, 2);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritional_information');
    }
};
