<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Suscripcion extends Model
{
    use HasFactory;
    protected $table='suscripciones';
    protected $fillable=[
        'estado',
        'fecha_ini',
        'fecha_fin',
        'plan_id',
        'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class,'id');
    }


    public function plan(){
        return $this->belongsTo(Plan::class,'id');
    }
}
