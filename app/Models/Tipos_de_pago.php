<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_de_pago extends Model
{
    use HasFactory;
    protected $table ='tipos_de_pago';
    protected $fillable =['nombre','tipo','status'];


}
