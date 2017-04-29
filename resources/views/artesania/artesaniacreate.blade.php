@extends('layouts.main')

@section('title', 'Crea artesania')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>rea artesania
  </h1>
  <div class="row">
    {!! Form::open(['rotute' => 'artesania.store', 'method' => 'POST']) !!}
    <div class="form-group">
      {!! Form::label('post', 'Post de instagram') !!}
      {!! Form::text('post', '', ['class' => 'form-control',
      'placeholder' => 'Código de instagram', 'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
