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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('temperature')->nullable();
            $table->string('humidite')->nullable();
            $table->string('pression_atm')->nullable();
            $table->string('luminosite')->nullable();
            $table->string('detection_pluie')->nullable();
            $table->string('precipitation')->nullable();
            $table->string('vitesse_vent')->nullable();
            $table->string('direction_vent')->nullable();
            $table->string('qualite_air')->nullable();
            $table->string('temperature_ressentie')->nullable();
            $table->string('pointe_rosee')->nullable();
            $table->integer('site_id', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
