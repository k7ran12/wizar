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
            $table->char('inscripcion', 15)->nullable();
            $table->string('tipo_vehiculo', 40)->nullable();
            $table->string('marca',40)->nullable();
            $table->string('modelo', 60)->nullable();
            $table->char('num_motor', 8)->nullable();
            $table->char('chasis', 10)->nullable();
            $table->char('num_vin', 20)->nullable();
            $table->string('color', 30)->nullable();
            $table->string('combustible', 40)->nullable();
            $table->string('pbv', 40)->nullable();
            $table->string('instituto', 100)->nullable();
            $table->char('num_poliza', 15)->nullable();
            $table->date('fecha_vencimiento_politica')->nullable();
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
