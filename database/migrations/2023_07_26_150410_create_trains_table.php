<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // CODICE TRENO
            $table->string('train_code', 10);
            // AZIENDA
            $table->string('company', 50);
            // STAZIONE DI PARTENZA
            $table->string('departure_station', 50);
            // STAZIONE DI ARRIVO
            $table->string('arrival_station', 50);
            // DATA DI PARTENZA
            $table->date('departure_date');
            // ORARIO DI PARTENZA
            $table->time('departure_time');
            // DATA DI ARRIVO
            $table->date('arrival_date');
            // ORARIO DI ARRIVO
            $table->time('arrival_time');
            // NUMERO CARROZZE
            $table->tinyInteger('coaches_number')->nullable();
            // IN ORARIO (SI, NO)
            $table->boolean('on_time')->default(true);
            // CANCELLATO (SI, NO)
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('trains');
    }
};