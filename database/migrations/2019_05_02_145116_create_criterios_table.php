<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterios', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer("id_evaluacion")->unsigned()->index();
            $table->text("nombre");
            $table->text("descripcion")->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("id_evaluacion")->references("id")->on("evaluacions")->delete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterios');
    }
}
