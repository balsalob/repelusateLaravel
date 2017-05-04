@extends('layouts.main')

@section('title', 'Nuestros productos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">N</span>uestros productos
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
    <a class="btn btn-primary" href="{{ route('piezas.edit', $pieza) }}">Editar</a>
    {!! Form::open(['route' => ['piezas.destroy', $pieza], 'method' => 'DELETE']) !!}
      {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </div>
  @endforeach
  </div>
  <div class="cold-md-12">
    <a class="btn btn-primary" href="{{ route('piezas.create') }}">Crea un pieza nueva</a>
  </div>
</div>
@endsection
