@extends('layouts.app')


@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card col-6 p-4 ">
        @if ( isset($errorAuth) )
        <span ><p class="alert alert-danger" role="alert">{{$errorAuth}}</p></span>
        @endif
        @if ( isset($msgSesion) )
        <span ><p class="alert alert-success" role="alert">{{$msgSesion}}</p></span>
        @endif
        <form method="POST">
          @csrf
            <div class="mb-3">
              <label for="Email" class="form-label">Email :</label>
              <input required value="{{old('email')}}" name="email" type="email" class="form-control" id="Email">
              @error('email')
                <span><p>{{$message}}</p></span>
              @enderror
              
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password :</label>
              <input required name="password" type="password" class="form-control" id="Password">
              @error('password')
                <span><p>{{$message}}</p></span>
              @enderror
            </div>
            {{-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <a href="#" class="btn btn-success">Registrame</a>
        </form>
    </div>
</div>
@endsection
