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
        Schema::create('propietario_vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('run', 30);
            $table->string('nombre', 40);
            $table->date('fecha_adquision');
            $table->string('repertorio', 80)->nullable();
            $table->date('de_fecha');
            $table->string('comuna', 80);
            $table->string('direccion', 120);
            $table->char('celular', 15);
            $table->string('email', 100);
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
        Schema::dropIfExists('propietario_vehiculos');
    }
};

