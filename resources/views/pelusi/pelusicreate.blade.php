@extends('layouts.main')

@section('title', 'Crea pelusis')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea un pelusi
  </h1>
  <div class="row">
    {!! Form::open(['route' => 'pelusi.store', 'method' => 'POST']) !!}
      <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre','' ,['class' => 'form-control',
        'placeholder' => 'nombre del pelusi', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('historia', 'Historia')!!}
        {!! Form::text('historia','', ['class' => 'form-control',
        'placeholder' => 'Historia del pelusi', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('foto', 'Foto')!!}
        {!! Form::text('foto', '', ['class' => 'form-control',
        'placeholder' => 'foto del pelusi', 'required'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('creepy', 'Creepy')!!}
        {!! Form::select('creepy', ['0' => 'No', '1' => 'Sí'],
         null, ['class' => 'form-control'])!!}
      </div>
      <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
