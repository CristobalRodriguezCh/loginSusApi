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
        <form method="POST" action="{{route('register')}}">
          @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nombre :</label>
              <input required value="{{old('name')}}" name="name" type="text" class="form-control" id="name">
              @error('name')
                <span><p>{{$message}}</p></span>
              @enderror
            </div>
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
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-address-card"></i>
                Registrarme</button>
            <a href="{{route("loginView")}}" class="btn btn-outline-primary">
                <i class="fa-solid fa-arrow-left"></i>
             Regresar</a>
            
        </form>
    </div>
</div>
@endsection
