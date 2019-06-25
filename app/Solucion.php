<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    protected $table = "solucion";

    protected $fillable = ["id_reto","titulo","justificacion","planteamiento","imagen_solucion"];

    public function detalleanexo(){
        return $this->hasMany("App\Detalle_Anexo");
    }
    public function detallematerial(){
        return $this->hasMany("App\Detalle_Material");
    }
    public function referencias(){
        return $this->hasMany("App\Referencia");
    }
    public function retos(){
    	return $this->belongsTo("App\Reto");
    }
    public function equipos(){
    	return $this->belongsTo("App\Equipo");
    }
}
