<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Suscripcion;
use App\Traits\fecha_fin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class suscripcionCw extends Controller{
    use fecha_fin;
    public function index(){
        $id_user = Auth::user()->id;
        
        $suscripcion =Suscripcion::with('plan')->where("user_id",'=',$id_user)->first();
        #dd($suscripcion);
        
        if(!$suscripcion){
            return view('suscripcion.subscriptions',[
                'suscripcion'=>''
            ]);
        }
           
        return view('suscripcion.subscriptions',[
            'suscripcion'=>$suscripcion,
            'plan'=>$suscripcion->plan
        ]);
    }

    public function store(Plan $plan){
        $user_id=Auth::user()->id;
        $suscripcion = new Suscripcion();
        $suscripcion->plan_id=$plan->id;
        $suscripcion->fecha_ini=date('Y-m-d');
        $suscripcion->fecha_fin=$this->calcula_fehcaFin($plan);
        $suscripcion->user_id=$user_id;
        $suscripcion->estado=1;


        if($suscripcion->save()){
            return view('suscripcion.subscriptions',[
                'suscripcion'=>$suscripcion,
                'plan'=>$suscripcion->plan,
                'msg'=>'Operacion exitosa'
            ]);
        }
    }
}
