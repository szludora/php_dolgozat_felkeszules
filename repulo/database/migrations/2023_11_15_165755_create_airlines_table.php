<?php

use App\Models\Airline;
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
        Schema::create('airlines', function (Blueprint $table) {
            $table->timestamps();
            $table->id('airline_id');
            $table->string('name');
            $table->string('country');
        });
        Airline::create(['name'=>'Orosz Boglárka','country'=>'Dánia']);
        Airline::create(['name'=>'Szlucska Dóra','country'=>'Dánia']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
