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
        Schema::create('compradors', function (Blueprint $table) {
            $table->id();
            $table->char('run', 15)->nullable();
            $table->string('nombre', 80)->nullable();
            $table->string('region', 80)->nullable();
            $table->string('comuna', 80)->nullable();
            $table->string('ciudad', 80)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('email', 100)->nullable();
            $table->char('celular', 15)->nullable();
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
        Schema::dropIfExists('compradors');
    }
};
