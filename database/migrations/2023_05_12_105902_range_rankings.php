<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RangeRankings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('range_rankings', function (Blueprint $table) {
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
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
