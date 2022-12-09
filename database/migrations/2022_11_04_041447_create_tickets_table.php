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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('prioridad');
            $table->bigInteger('id_incidencia')->unsigned();
            $table->bigInteger('id_estado')->unsigned();
            $table->bigInteger('id_requerimiento')->unsigned();

            $table->timestamps();
            $table->foreign('id_incidencia')->references('id')->on('incidencias')->onDelete("cascade");
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete("cascade");
            $table->foreign('id_requerimiento')->references('id')->on('requerimientos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
