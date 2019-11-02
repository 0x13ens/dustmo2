<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->string('code')->nullable();
            $table->bigIncrements('id');
            $table->string('dustDensity')->nullable();
            $table->string('voMeasured')->nullable();
            $table->string('calcVoltage')->nullable();
            $table->string('temperature')->nullable();
            $table->string('pressure')->nullable();
            $table->string('altitude')->nullable();
            $table->string('humidity')->nullable();
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
        Schema::dropIfExists('sensors');
    }
}
