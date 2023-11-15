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
        Schema::create('flights', function (Blueprint $table) {
            $table->timestamps();
            $table->id('flight_id');
            $table->date('date');
            // az airline_id külső kulcs és az airline_id-ra mutat az airlines migrációs fájlon belül
            $table
                ->foreignId('airline_id')
                ->references('airline_id')
                ->on('airlines');
            $table->integer('limit')->default(150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
