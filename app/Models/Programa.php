<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;
    protected $table="programas";
    protected $fillable = [
        'nombre','plan_estudios','definicion','mision','vision','politica','objetivo','per_ingreso','per_egreso','campo','tipo'
    ];
}
