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
        Schema::create('facinhotels', function (Blueprint $table) {
            $table->integer('hotelid');
            $table->integer('facid');
            $table->integer('numof');

            $table->foreign('hotelid')->references('hotelid')->on('hotels');
            $table->foreign('facid')->references('facid')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facinhotels');
    }
};
