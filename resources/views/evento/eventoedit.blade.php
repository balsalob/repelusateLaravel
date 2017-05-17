@extends('layouts.main')

@section('title', 'Editar eventos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>dita eventos
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['eventos.update', $evento], 'method' => 'PUT',
      'enctype'=>'multipart/form-data']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', $evento->nombre, ['class' => 'form-control',
        'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('texto', 'Texto')!!}
        {!! Form::text('texto', $evento->texto, ['class' => 'form-control',
        'required'])!!}
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
