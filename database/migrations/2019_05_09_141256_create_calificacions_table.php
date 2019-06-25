<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacions', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("id_solucion")->unsigned();
            $table->integer("id_pregunta")->unsigned();
            $table->integer("id_usuario")->unsigned();
            $table->integer("id_reto")->unsigned();
            $table->date("fecha_calificacion");
            $table->string("puntaje",10);
            $table->text("observaciones");
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_solucion")->references("id")->on("solucions")->delete("cascade");
            $table->foreign("id_pregunta")->references("id")->on("preguntas")->delete("cascade");
            $table->foreign("id_usuario")->references("id")->on("users")->delete("cascade");
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
        Schema::dropIfExists('calificacions');
    }
}
