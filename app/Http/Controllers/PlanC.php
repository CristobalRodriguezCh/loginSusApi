<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Requests\PlanR;//plan request

class PlanC extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => []]);
    }

    public function index(){
        $planes = Plan::all();
        return response()->json([
           'planes' => $planes
        ],200);   
    }

    public function store(PlanR $request){
        $plan = new Plan();
        $plan->nombre = $request->nombre;
        $plan->precio = $request->precio;
        $plan->descuento = $request->descuento;
        $plan->duracion = $request->duracion;
        $plan->descripcion = $request->descripcion;
        $plan->cantidad_personas = $request->cantidad_personas;
        
        if($plan->save()){
            return response()->json([
                'success'=>true,
                'plan'=>$plan
            ],200);
        }
    }

    public function update(PlanR $request, int $id){
        $plan = Plan::find($id);
        if($plan){
            $plan->nombre = $request->nombre;
            $plan->precio = $request->precio;
            $plan->descuento = $request->descuento;
            $plan->duracion = $request->duracion;
            $plan->descripcion = $request->descripcion;
            $plan->cantidad_personas = $request->cantidad_personas;

            if($plan->save()){
                return response()->json([
                    'success'=>true,
                    'plan'=>$plan
                ],200);
            }

        }

        return response()->json([
            'success'=>false,
            'msg'=>'plan no encontrado'
        ],404);
    }
}
