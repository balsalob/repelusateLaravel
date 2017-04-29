@extends('layouts.main')

@section('title', 'Crear amigo')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea un amigos
  </h1>
  <div class="row">
    {!! Form::open(['rotute' => 'amigo.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', '', ['class' => 'form-control',
      'placeholder' => 'nombre del amigo', 'required'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('texto', 'Texto')!!}
      {!! Form::text('texto', '', ['class' => 'form-control',
      'placeholder' => 'Texto del amigo', 'required'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('foto', 'Foto')!!}
      {!! Form::text('foto', '', ['class' => 'form-control',
      'placeholder' => 'foto del amigo', 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
@endsection
