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
        Schema::create('historial_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('observaciones');
            $table->bigInteger('id_accion')->unsigned();
            $table->bigInteger('id_ticket')->unsigned();
            $table->timestamps();

            $table->foreign('id_accion')->references('id')->on('accions')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_tickets');
    }
};
