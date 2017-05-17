@extends('layouts.main')

@section('title', 'Crea pelusis')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>ditar un pelusi
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['pelusis.update', $pelusi], 'method' => 'PUT',
      'enctype'=>'multipart/form-data']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre',$pelusi->nombre ,['class' => 'form-control',
         'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('historia', 'Historia')!!}
        {!! Form::text('historia',$pelusi->historia, ['class' => 'form-control',
         'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('creepy', 'Creepy')!!}
        {!! Form::select('creepy', ['0' => 'No', '1' => 'Sí'],
         null, ['class' => 'form-control'])!!}
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
