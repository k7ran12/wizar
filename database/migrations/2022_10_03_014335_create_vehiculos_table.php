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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->char('inscripcion', 15);
            $table->string('tipo_vehiculo', 40);
            $table->string('marca',40);
            $table->string('modelo', 60);
            $table->char('num_motor', 8);
            $table->char('chasis', 10);
            $table->char('num_vin', 20);
            $table->string('color', 30);
            $table->string('combustible', 40);
            $table->string('pbv', 40);
            $table->string('instituto', 100);
            $table->char('num_poliza', 15);
            $table->date('fecha_vencimiento_politica');
            $table->text('limitaciones_dominio')->nullable();
            $table->text('subincripciones')->nullable();
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
        Schema::dropIfExists('vehiculos');
    }
};
