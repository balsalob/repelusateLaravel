@extends('layouts.main')

@section('title', 'Editar piezas')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>dita una pieza
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['piezas.update', $pieza], 'method' => 'PUT']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', $pieza->nombre, ['class' => 'form-control',
        'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('texto', 'Texto')!!}
        {!! Form::text('texto', $pieza->texto, ['class' => 'form-control',
        'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('foto', 'Foto')!!}
        {!! Form::text('foto', $pieza->foto, ['class' => 'form-control',
        'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('url', 'url')!!}
        {!! Form::text('url', $pieza->url, ['class' => 'form-control',
        'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
