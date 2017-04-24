@extends('layouts.main')

@section('title', 'Nuestros productos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">P</span>iezas
  </h1>
  <div class="row">
  @foreach($piezas as $pieza)
  <div class="card col-md-4">
    <img class="card-img-top img-fluid" src="/img/piezas/{{$pieza->foto}}"
      alt="{{$pieza->nombre}}">
    <div class="card-block">
      <h4 class="card-title">{{ $pieza->nombre }}</h4>
      <p class="card-text">{{ $pieza->texto }}</p>
      <a href="{{ $pieza->url }}" target="_blank">Comprala aquí</a>
    </div>
  </div>
  @endforeach
  </div>
</div>
@endsection
