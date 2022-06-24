<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SuscripcionR;
use App\Models\Plan;
use App\Models\Suscripcion;

class SuscripcionC extends Controller
{
    public function __construct(){
        $this->middleware('auth:api',['except'=>[]]);
    }
    public function store(SuscripcionR $request){
        if(!Plan::find($request->plan_id)){
            return response([
                "success"=>false,
                "msg"=>'seleccione un plan valido'
            ],404);
        }
        //verifica que el usuario logeado no este en una suscripcion
        $s=Suscripcion::with('plan','user')
        ->where('user_id','=',auth()->user()->id)
        ->get();
        //traigo la suscripcion con el usuario
        //y el plan al que esta suscrito
        if($s){
            return response([
                "success"=>false,
                "msg"=>'el usuario ya pose una suscripcion',
                "suscripcion"=>$s
            ],200);
        }
        $suscripcion = new Suscripcion();
        $suscripcion->estado = 1;
        $suscripcion->fecha_ini = date('Y-m-d');
        $suscripcion->plan_id = $request->plan_id;
        $suscripcion->user_id = auth()->user()->id;



        if($suscripcion->save()){
            return response()->json([
                'success'=>true,
                'suscripcion'=>$suscripcion->with('plan')
            ], 201);
        }

        return response()->json([
            'success'=>false
        ],400);
    }
}
