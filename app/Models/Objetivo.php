<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    use HasFactory;
    protected $table="objetivos";
    protected $fillable = [
        'descripcion','criterio','indicador','id_programa'
    ];
}