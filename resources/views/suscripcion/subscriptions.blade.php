@extends('layouts.app')

@include('partials.nav')

@section('content')
    <div class="pt-3">
        <h2>Suscripciones</h2>
        <hr>

        <div>
          @if ($suscripcion)
          <div class="card">
            <div class="card-header">
              Usted se encuentra suscripto al siguiente plan
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$plan->nombre}}</h5>
              <ul class="list-group card-text">
                <li class="list-group-item">descripcion : {{$plan->descripcion}}</li>
                <li class="list-group-item">Cantidad de personas : {{$plan->cantidad_personas}}</li>
                <li class="list-group-item">duracion : {{$plan->duracion}}</li>
                <li class="list-group-item">precio : {{$plan->precio}}</li>
                <li class="list-group-item">descuento : {{$plan->descuento}}</li>
              </ul>
              <a href="#" class="btn btn-success mt-3">
                <i class="fa-solid fa-dollar-sign"></i>
               Realizar pago</a>
              <a href="#" class="btn btn-primary mt-3">
                <i class="fa-solid fa-receipt"></i>
                Ver mis pagos</a>
            </div>
            <div class="card-footer text-muted">
              Fecha de suscripcion   {{$suscripcion->fecha_ini}}
            </div>
          </div>
          @else
            <div class="alert alert-info" role="alert">
              Actualmente no esta suscripto a ningun plan, por favor escoga un plan <a href="#" class="alert-link">Click Aqui !!</a>
            </div>
          
              
          @endif
           

        </div>

    </div>
@endsection