<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    use HasFactory;
     protected $table ='municipios';
    protected $fillable =['nombre','status','estados_id'];


 public function estados(){
    	return $this->belongsTo('App\Models\Estados','estados_id','id');

}


}
