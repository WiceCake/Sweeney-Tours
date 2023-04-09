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
        Schema::create('resorts', function (Blueprint $table) {
            $table->string('resort')->unique();
            $table->primary('resort');
            $table->string('region');
            $table->string('transfertime');
            $table->string('beach');
            $table->integer('beachnum');
            $table->integer('page');

            $table->foreign('region')->references('region')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resorts');
    }
};
