<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_dehabitacion extends Model
{
    use HasFactory;
       use HasFactory;
     protected $table ='tipo_dehabitacion';
    protected $fillable =['nombre','tipo','precio','status'];


}
