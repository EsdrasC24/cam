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
        Schema::create('daylybooks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedFloat('due')->default(0);
            $table->unsignedFloat('havings')->default(0);
            $table->string('description', 140)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daylybooks');
    }
};
