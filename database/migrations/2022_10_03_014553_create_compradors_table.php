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
            $table->char('run', 15);
            $table->string('nombre', 80);
            $table->string('region', 80);
            $table->string('comuna', 80);
            $table->string('ciudad', 80);
            $table->string('direccion',100);
            $table->string('email', 100);
            $table->char('celular', 15);
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
