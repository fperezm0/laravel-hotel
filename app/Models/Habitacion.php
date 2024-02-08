<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

      protected $table ='habitacion';
    protected $fillable =['nombre','numero_de_habitacion','descripcion','status','tipo_dehabitacion_id'];

    public function tipos_dehabitacion(){
    	return $this->belongsTo('App\Models\Tipos_dehabitacion','tipo_dehabitacion_id','id');

}

}
