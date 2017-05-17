@extends('layouts.main')

@section('title', 'Redes sociales')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">R</span>edes sociales
  </h1>
  <div class="row">
    @foreach($redessociales as $redsocial)
      <div class="col-md-12">
        <a href="{{$redsocial->direccion}}" target="_blank">
          <img src="/img/redes/{{$redsocial->nombre}}.png"
            alt="{{$redsocial->nombre}}">
        </a>
        <div class="botones">
          <ul class="redes">
            <li>
              <a class="btn btn-primary" href="{{ route('redsocial.edit', $redsocial) }}">Editar</a>
            </li>
            <li>
              {!! Form::open(['route' => ['redsocial.destroy', $redsocial], 'method' => 'DELETE']) !!}
                {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
            </li>
          </ul>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
