<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;
     protected $table ='estados';
    protected $fillable =['nombre','status','paises_id'];

      public function paises(){
    	return $this->belongsTo('App\Models\Paises','pais_id','id');

}

   
}
