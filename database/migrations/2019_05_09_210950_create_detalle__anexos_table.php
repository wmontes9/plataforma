<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__anexos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_solucion")->unsigned();
            $table->integer("id_anexo")->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("id_solucion")->references("id")->on("solucions")->delete("cascade");
            $table->foreign("id_anexo")->references("id")->on("anexos")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__anexos');
    }
}
