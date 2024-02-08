<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;
     protected $table ='habitacion';
    protected $fillable =['nombre','fechaReserva','subtotal','iva','total','descripcion','status','users_id','u_servicio_id','reservacion_id','tipo_de_pago_id'];

    public function usuario_servicio(){
    	return $this->belongsTo('App\Models\Usuario_servicio','u_servicio_id','id');

}

  public function reservacion(){
    	return $this->belongsTo('App\Models\Reservacion','reservacion_id','id');
}

  public function tipos_de_pago_id(){
    	return $this->belongsTo('App\Models\Tipos_de_pago_id','tipo_de_pago_id','id');
}



}
