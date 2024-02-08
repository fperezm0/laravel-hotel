<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario_servicio extends Model
{
    use HasFactory;

    protected $table ='reservacion';
    protected $fillable =['nombre','fecha','precio','observaciones','users_id','servicio_id'];

 public function users(){
    	return $this->belongsTo('App\Models\Users','users_id','id');

}

 public function servicio(){
    	return $this->belongsTo('App\Models\Servicio','servicio_id','id');

}


}
