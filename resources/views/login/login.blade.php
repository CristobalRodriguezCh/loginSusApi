@extends('layouts.app')


@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card col-6 p-4 ">
        <form>
            <div class="mb-3">
              <label for="Email" class="form-label">Email :</label>
              <input type="email" class="form-control" id="Email">
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password :</label>
              <input type="password" class="form-control" id="Password">
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
