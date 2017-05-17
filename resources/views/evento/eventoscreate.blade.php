@extends('layouts.main')

@section('title', 'Crea eventos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea eventos
  </h1>
  <div class="row">
    {!! Form::open(['route' => 'eventos.store', 'method' => 'POST',
      'enctype'=>'multipart/form-data']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', '', ['class' => 'form-control',
        'placeholder' => 'nombre del evento', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('texto', 'Texto')!!}
        {!! Form::text('texto', '', ['class' => 'form-control',
        'placeholder' => 'Texto del evento', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('foto', 'Foto')!!}
        {!! Form::file('foto',['class' => 'form-control'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
