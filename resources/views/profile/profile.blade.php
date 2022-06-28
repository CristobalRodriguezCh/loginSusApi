@extends('layouts.app')

@include('partials.nav')

@section('content')
    <div class="pt-3">
      @if (isset($msg))
      <div class="alert alert-success" role="alert">
        {{$msg}}
      </div>
      @endif
        <div class="card">
            <h5 class="card-header">Hola {{Auth::user()->name}}</h5>
            <div class="card-body">
              <h5 class="card-title">Mis datos</h5>

              <form method="post" action="{{route('edit')}}">
                @csrf
                {{-- @method('PUT') --}}
             
                <div class="input-group mb-3">
                  @error('name')
                     <div class="row col-12 ms-1">{{$message}}</div> 
                  @enderror
                  <label for="name" class="input-group-text">Nombre</label>
                  <input name="name" id="name" value="{{Auth::user()->name}}" type="text" class="form-control" required>
                  
                </div>
  
                <div class="input-group mb-3">
                  @error('email')
                    <div class="row col-12 ms-1">{{$message}}</div> 
                  @enderror
                  <label for="email" class="input-group-text">Email</label>
                  <input name="email" id="email" value="{{Auth::user()->email}}" type="email" class="form-control" required>
                </div>
  
                <div class="input-group mb-3">
                  <label for="fecha" class="input-group-text">Fecha de ingreso</label>
                  <input id="fecha" value="{{Auth::user()->created_at}}" type="text" class="form-control" disabled>
                </div>

            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary mb-3 me-2">
                  <i class="fa-solid fa-user-pen"></i> Editar
                </button>
                
              </form>

              <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  Cerrar sesion
                </button>
              </form>
              
            </div>
            </div>
          </div>
        
    </div>
@endsection
