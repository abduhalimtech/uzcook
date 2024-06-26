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
        Schema::create('equipment_needed', function (Blueprint $table) {
            $table->foreignId('recipe_id')->constrained('recipes', 'id')->onDelete('cascade');
            $table->string('equipment');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_neededs');
    }
};
