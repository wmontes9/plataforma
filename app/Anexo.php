<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = "anexo";

    protected $fillable = ["id_detalle","nombre","url_anexo"];

   
    public function detalle_anexo(){
    	return $this->hasMany("App\detalle_anexo");
    }
}
