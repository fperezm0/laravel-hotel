<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos_de_usuario extends Model
{
    use HasFactory;
     protected $table ='tipos_de_usuario';
    protected $fillable =['nombre','tipo','status'];



}
