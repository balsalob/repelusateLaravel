@extends('layouts.main')

@section('title', 'Crea eventos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea eventos
  </h1>
  <div class="row">
    {!! Form::open(['rotute' => 'evento.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', '', ['class' => 'form-control',
        'placeholder' => 'nombre del evento', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('texto', 'Texto')!!}
        {!! Form::text('texto', '', ['class' => 'form-control',
        'placeholder' => 'Texto del evento', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('foto', 'Foto')!!}
        {!! Form::text('foto', '', ['class' => 'form-control',
        'placeholder' => 'foto del evento', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
