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
        Schema::create('hotels', function (Blueprint $table) {
            $table->integer('hotelid');
            $table->primary('hotelid');
            $table->string('hotelname');
            $table->boolean('sunbeam');
            $table->boolean('ya');
            $table->integer('rating');
            $table->string('stdbasis');
            $table->integer('page');
            $table->string('resort');
            $table->text('resortloc');
            $table->integer('roomtotal');

            $table->foreign('resort')->references('resort')->on('resorts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
