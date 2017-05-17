@extends('layouts.main')

@section('title', 'Añadir red social')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea una red social
  </h1>
  <div class="row">
    {!! Form::open(['route' => 'redsocial.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::select('nombre',['Facebook' => 'Facebook',
      'Twitter' => 'Twitter','Instagram' => 'Instagram',
      'GooglePlus' => 'GooglePlus', 'Youtube' => 'Youtube'] ,
      'null', ['class' => 'form-control',
      'placeholder' => 'Elige la red social'])!!}
    </div>
    <div class="form-group">
      {!! Form::label('url', 'Url')!!}
      {!! Form::text('direccion', 'http://www.', ['class' => 'form-control',
       'required'])!!}
      {!! Form::hidden('amigo_id', $amigo->id, ['required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
