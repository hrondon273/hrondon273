<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255)->nullable(false);
            $table->string('celular', 255)->nullable(false);
            $table->string('correo', 255)->nullable(false);
            $table->string('cantidadPersonas', 255)->nullable(false);
            $table->date('fechaReservacion', 255)->nullable(false);
            $table->timestamp('FechaCreacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
