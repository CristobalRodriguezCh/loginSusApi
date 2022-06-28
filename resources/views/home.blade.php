@extends('layouts.app')
@include('partials.nav')
@section('content')
<div class="conteiner">
    Bienvenido<p>{{ Auth::user()}}</p>
</div>
@endsection
