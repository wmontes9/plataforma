<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucions', function (Blueprint $table) {
            $table->Increments('id');
            //$table->integer("id_equipo")->unsigned();
            $table->integer("id_reto")->unsigned();
            $table->text("titulo");
            $table->text("justificacion");
            $table->text("planteamiento");
            $table->string("imagen_solucion")->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_reto")->references("id")->on("retos")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solucions');
    }
}
