<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driversignup', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('contact')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image');
            $table->string('licence');
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
        Schema::dropIfExists('driversignup');
    }
};