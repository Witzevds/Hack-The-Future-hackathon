<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCelestialBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celestial_bodies', function (Blueprint $table) {
            $table->id(); // Primaire sleutel
            $table->string('name'); // Naam van het hemellichaam
            $table->string('type'); // Type: Star, Planet, Moon, etc.
            $table->text('description'); // Beschrijving
            $table->string('image'); // Afbeeldingspad of URL
            $table->float('yaw'); // Yaw-waarde
            $table->float('pitch'); // Pitch-waarde
            $table->timestamps(); // Created_at en Updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celestial_bodies');
    }
}
