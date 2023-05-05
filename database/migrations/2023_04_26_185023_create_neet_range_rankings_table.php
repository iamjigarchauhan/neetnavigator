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
        Schema::create('neet_range_rankings', function (Blueprint $table) {
            $table->id();
            $table->string('year', 4);
            $table->string('min_mark', 6)->nullable();
            $table->string('max_mark', 6)->nullable();
            $table->string('min_rank', 15)->nullable();
            $table->string('max_rank', 15)->nullable();
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neet_range_rankings');
    }
};
