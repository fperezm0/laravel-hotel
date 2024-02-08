<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos_de_habitacion extends Model
{
    use HasFactory;
   protected $table ='fotos_de_habitacion';
    protected $fillable =['titulo','fotos','status','habitacion_id'];

    public function habitacion(){
    	return $this->belongsTo('App\Models\Habitacion','habitacion_id','id');

}

}
