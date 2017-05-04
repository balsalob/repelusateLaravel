@extends('layouts.main')

@section('title', 'Editar artesania')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>dita artesania
  </h1>
  <div class="row">
    {!! Form::open(['route' => ['artesanias.update', $artesania], 'method' => 'PUT']) !!}
    <div class="form-group">
      {!! Form::label('post', 'Post de instagram') !!}
      {!! Form::textarea('post', $artesania->post, ['class' => 'form-control',
      'required'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
