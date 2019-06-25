<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Anexo extends Model
{
    protected $table = "detalle_anexo";

    protected $fillable = ["id_solucion","id_anexo"];

    public function soluciones(){
    	return $this->belongsTo("App\Solucion");
    }
    public function anexos(){
    	return $this->belongsTo("App\Anexo");
    }
}
