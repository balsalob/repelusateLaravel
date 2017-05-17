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
        <img class="card-img-top img-fluid" src="/img/amigos/{{$amigo->foto}}"
          alt="{{$amigo->nombre}}">
        <div class="card-block">
          <h4 class="card-title">{{ $amigo->nombre }}</h4>
          <p class="card-text">{{ $amigo->texto }}</p>
          <ul class="redes">
            @foreach($amigo->redsocialamigos as $redsocial)
              <li >
                <a href="{{$redsocial->direccion}}" target="_blank">
                  <img src="/img/redes/{{$redsocial->nombre}}.png"
                    alt="{{$redsocial->nombre}}">
                </a>
              </li>
            @endforeach
          </ul>
          @if (Auth::check())
          <div class="botones">
            <ul class="redes">
              <li>
                <a class="btn btn-primary" href="{{ route('amigos.edit', $amigo) }}">Editar</a>
              </li>
              <li>
                {!! Form::open(['route' => ['amigos.destroy', $amigo], 'method' => 'DELETE']) !!}
                  {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
              </li>
              <li>
                <a class="btn btn-success" href="{{ route('redsocial.create', $amigo) }}">Añadir red social</a>
              </li>
              <li>
                <a class="btn btn-warning" href="{{ route('redsocialamigo.index', $amigo) }}">Editar redes sociales</a>
              </li>
            </ul>
          </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
  @if (Auth::check())
    <div class="cold-md-12">
      <a class="btn btn-primary" href="{{ route('amigos.create') }}">Crea un amigo nuevo</a>
    </div>
  @endif
</div>
@endsection
