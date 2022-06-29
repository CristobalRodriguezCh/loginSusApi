<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suscripcion;

class Plan extends Model
{
    use HasFactory;
    protected $table = "planes";
    protected $fillable = [
        'nombre',
        'precio',
        'descuento',
        'duracion',
        'descripcion',
        'cantidad_personas'
    ];
    protected $timestamp = false;


    public function suscripcion(){
        return $this->hasMany('App\Suscripcion');
    }
}
