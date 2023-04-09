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
        Schema::create('facinresorts', function (Blueprint $table) {
            $table->string('resort');
            $table->integer('facid');

            $table->foreign('resort')->references('resort')->on('resorts');
            $table->foreign('facid')->references('facid')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facinresorts');
    }
};
