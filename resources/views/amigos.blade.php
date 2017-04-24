@extends('layouts.main')

@section('title', 'Amigos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">A</span>migos
  </h1>
  <div class="row">
  @foreach($amigos as $amigo)
    <div class="card col-md-4">
      <img class="card-img-top img-fluid" src="/img/{{$amigo->foto}}"
        alt="{{$amigo->nombre}}">
      <div class="card-block">
        <h4 class="card-title">{{ $amigo->nombre }}</h4>
        <p class="card-text">{{ $amigo->texto }}</p>
        <ul class="redes">
          @foreach($amigo->redsocialamigos as $redsocial)
            <li >
              <a href="{{$redsocial->direccion}}" target="_blank">
                <img src="/img/redes/{{$redsocial->nombre}}.png"
                  alt={{$redsocial->nombre}}>
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endforeach
  </div>
@endsection
