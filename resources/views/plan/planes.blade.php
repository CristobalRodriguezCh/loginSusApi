@extends('layouts.app')

@include('partials.nav')
@section('styles')
    <link href="{{ asset('css/plan.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="pt-3">
    <h2>Selecione un plan </h2>
    <hr>
    <div class="d-flex justify-content-evenly">
    @forelse ($planes as $plan)
    
    <div class="card text-center" style="width: 18rem;">
        <div class="card-body">
          <h3 class="card-title">{{$plan->nombre}}</h3>
          <hr>
          <p class="">para {{$plan->cantidad_personas}} usuario</p>
        </div>

        <div class="">
          <h2 class="card-title"> <b>{{$plan->precio}}</b> </h2>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
            {{-$plan->descuento}}%
            <span class="visually-hidden">unread messages</span>
          </span>
          <p class="">Pago unico sin suscripcion</p>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">Descripcion : {{$plan->descripcion}}</li>
          <li class="list-group-item">Duracion : {{$plan->duracion}}</li>
        </ul>
        
        <div class="card-body">
          <a href="{{url('suscripcionPlan',['plan'=>$plan])}}" class="card-link btn btn-outline-success">
            Comprar <i class="fa-solid fa-comment-dollar"></i>
          </a>
        </div>
    </div>
    @empty
        
    @endforelse
    </div>
</div>
@endsection