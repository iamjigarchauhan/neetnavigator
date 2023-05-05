<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNeetInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_neet_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('state_id_10th')->nullable();
            $table->foreignId('state_id_12th')->nullable();
            $table->string('pincode', 10);
            $table->string('state_by_pincode', 20);
            $table->foreignId('city_id')->nullable();
            $table->string('area', 50);
            $table->string('neet_category', 10);
            $table->string('state_category', 10);
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('physical_handicap', ['yes', 'no'])->nullable();            
            $table->enum('armed_force', ['yes', 'no'])->nullable();            
            $table->enum('minority', ['yes', 'no'])->nullable();            
            $table->enum('eligible_quota', ['yes', 'no'])->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('state_id_10th')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('state_id_12th')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_neet_info');
    }
}
