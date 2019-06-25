<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("id_criterio")->unsigned();
            $table->text("descripcion");
            $table->string("puntos",10);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("id_criterio")->references("id")->on("criterios")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
