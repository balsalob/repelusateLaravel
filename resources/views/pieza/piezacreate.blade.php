@extends('layouts.main')

@section('title', 'Crea piezas')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea piezas
  </h1>
  <div class="row">
    {!! Form::open(['rotute' => 'pieza.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', '', ['class' => 'form-control',
        'placeholder' => 'nombre de la pieza', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('texto', 'Texto')!!}
        {!! Form::text('texto', '', ['class' => 'form-control',
        'placeholder' => 'Texto de la pieza', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('foto', 'Foto')!!}
        {!! Form::text('foto', '', ['class' => 'form-control',
        'placeholder' => 'foto de la pieza', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('url', 'url')!!}
        {!! Form::text('url', '', ['class' => 'form-control',
        'placeholder' => 'url de la pieza', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
