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
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable(); // An Airmo must belong to a user this gets configured though the android app after user login,
                                                 // this also allows us to filter users indivdual data to their accounts
            $table->string('serial')->nullable();   // An Airmo must also have a serial in which we use the devices unique mac address
            $table->string('dustDensity')->nullable();
            $table->string('voMeasured')->nullable();
            $table->string('calcVoltage')->nullable();
            $table->string('temperature')->nullable();
            $table->string('pressure')->nullable();
            $table->string('altitude')->nullable();
            $table->string('humidity')->nullable();
            $table->string('c02')->nullable();
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
