<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__materials', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("id_solucion")->unsigned();
            $table->integer("id_material")->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("id_solucion")->references("id")->on("solucions")->delete("cascade");
            $table->foreign("id_material")->references("id")->on("materials")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__materials');
    }
}
