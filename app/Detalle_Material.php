<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_Material extends Model
{
    protected $table = "detalle_material";

    protected $fillable = ["id_solucion","id_material"];

    public function soluciones(){
    	return $this->belongsTo("App\Solucion");
    }
    public function anexos(){
    	return $this->belongsTo("App\Material");
    }
}
