<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class suscripcionCw extends Controller
{
    public function index(){
        $id_user = Auth::user()->id;
        $suscripcion = Suscripcion::where("user_id",'=',$id_user)->first();
        
        if(!$suscripcion){
            return view('suscripcion.subscriptions',[
                'suscripcion'=>$suscripcion
            ]);
        }
        return view('suscripcion.subscriptions',[
            'suscripcion'=>$suscripcion,
            'plan'=>$suscripcion->plan
        ]);
    }
}
