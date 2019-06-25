<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = "material";

    protected $fillable = ["nombre"];

   
    public function soluciones(){
    	return $this->belongsTo("App\Detalle_Material");
    }
}
