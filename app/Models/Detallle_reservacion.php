<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallle_reservacion extends Model
{
    use HasFactory;

     protected $table ='detallle_reservacion';
    protected $fillable =['cantidad','fecha','habitacion_id','reservacion_id'];

    public function habitacion(){
    	return $this->belongsTo('App\Models\habitacion','habitacion_id','id');

}

   public function reservacion(){
    	return $this->belongsTo('App\Models\reservacion','reservacion_id','id');

}

}
