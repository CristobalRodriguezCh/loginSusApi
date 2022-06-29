<?php
namespace App\Traits;

use App\Models\Plan;

trait fecha_fin {

    public function calcula_fehcaFin(Plan $plan){
        $fecha_actual = Date('Y-m-d');
        if($plan->duracion == 'mesual'){
            return date('Y-m-d',strtotime($fecha_actual.' + 1 month'));
        }elseif($plan->duracion == 'bimestral'){
            return date('Y-m-d',strtotime($fecha_actual.' + 2 month'));
        }elseif($plan->duracion == 'trimestral'){
            return date('Y-m-d',strtotime($fecha_actual.' + 3 month'));
        }elseif($plan->duracion == 'semestral'){
            return date('Y-m-d',strtotime($fecha_actual.' + 6 month'));
        }
    }
}