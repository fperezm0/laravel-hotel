<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

     protected $table ='users';
    protected $fillable =['username','password','nombre','apellido','direccion','telefono','fechaNac','codigo_postal','email','status','paises_id','estados_id','municipios_id','tipos_de_usuario_id'];

      public function paises(){
    	return $this->belongsTo('App\Models\Paises','pais_id','id');
}

 public function estados(){
    	return $this->belongsTo('App\Models\Estados','estado_id','id');

}

    public function municipios(){
    	return $this->belongsTo('App\Models\Municipios','municipios_id','id');

}
  public function tipos_de_usuario(){
    	return $this->belongsTo('App\Models\Tipos_de_usuario','tipos_de_usuario_id','id');

}

}
