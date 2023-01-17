<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;
    protected $table='bibliotecadb';
    protected $fillable = ['id','titulo','autor','id_usuario'];
}
