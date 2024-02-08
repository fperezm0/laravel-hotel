<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

  protected $table ='reservacion';
    protected $fillable =['fechaReserva','fechaLlegada','fechaSalida','subtotal','iva','total','cliente_id'];

 public function users(){
    	return $this->belongsTo('App\Models\Users','cliente_id','id');

}

}
