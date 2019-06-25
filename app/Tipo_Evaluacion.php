<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Evaluacion extends Model
{
    protected $table = "tipo_evaluacion";

    protected $fillable = ["nombre"];

    public function criterios(){
        return $this->belongsTo("App\Evaluacion");
    }
}
