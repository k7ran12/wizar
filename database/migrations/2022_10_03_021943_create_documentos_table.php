<?php

use App\Models\Comprador;
use App\Models\Firma;
use App\Models\PropietarioVehiculo;
use App\Models\Vehiculo;
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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_creacion')->nullable();
            $table->char('num_interno',10)->nullable();
            $table->string('sucuarsal')->nullable()->default(0);
            $table->string('usuario')->nullable()->default(0);
            $table->string('num_inscripcion')->nullable();
            $table->string('rut_comprador')->nullable();
            $table->string('nombre_vendedor')->nullable();
            $table->foreignIdFor(PropietarioVehiculo::class)->constrained();
            $table->foreignIdFor(Vehiculo::class)->constrained();
            $table->foreignIdFor(Firma::class)->constrained();
            $table->foreignIdFor(Comprador::class)->constrained();
            $table->boolean('estado')->nullable()->default(1);
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
        Schema::dropIfExists('documentos');
    }
};
