@extends('layouts.main')

@section('title', 'Editar amigo')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>dita un amigos
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['amigos.update', $amigo], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', $amigo->nombre, ['class' => 'form-control',
      'required'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('texto', 'Texto')!!}
      {!! Form::text('texto', $amigo->texto, ['class' => 'form-control',
      'required'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('foto', 'Foto')!!}
      {!! Form::text('foto', $amigo->foto, ['class' => 'form-control',
      'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
