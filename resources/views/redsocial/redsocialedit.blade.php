@extends('layouts.main')

@section('title', 'Añadir red social')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea una red social
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['redsocial.update', $redsocial], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::select('nombre',['Facebook' => 'Facebook',
      'Twitter' => 'Twitter','Instagram' => 'Instagram',
      'GooglePlus' => 'GooglePlus', 'Youtube' => 'Youtube'] ,
      $redsocial->nombre, ['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('url', 'Url')!!}
      {!! Form::text('direccion', $redsocial->direccion, ['class' => 'form-control', 'required'])!!}
      {!! Form::hidden('amigo_id', $redsocial->amigo_id, ['required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
