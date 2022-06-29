<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class planCw extends Controller
{
    public function index(){
        $planes = Plan::all();
        return view('plan.planes',[
            'planes'=>$planes
        ]);
    }

}
