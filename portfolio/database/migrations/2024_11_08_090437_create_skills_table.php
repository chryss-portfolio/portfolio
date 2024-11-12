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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key with cascade delete
            $table->string('programming_language'); // Language name, e.g. 'PHP', 'JavaScript'
            $table->unsignedInteger('percentage'); // The skill percentage (0-100)
            $table->timestamps();

            // Optional: you don't need to manually create an index, it's done by foreignId()
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
