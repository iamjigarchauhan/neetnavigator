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
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('sort_name', 20)->nullable();
            $table->string('name')->nullable();
            $table->string('university')->nullable();
            $table->string('course_name', 50)->nullable();
            $table->foreignId('state_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('pincode', 10)->nullable();
            $table->string('institution_type', 50)->nullable();
            $table->string('year_inspection', 4)->nullable();
            $table->integer('annual_seat')->nullable();
            $table->string('total_fee')->nullable();
            $table->text('mci_recognition')->nullable();
            $table->date('lop_date')->nullable();
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colleges');
    }
};
