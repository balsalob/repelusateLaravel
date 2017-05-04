@extends('layouts.main')

@section('title', 'Como lo hacemos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">A</span>rtesania
  </h1>
  <div class="row">
    @foreach($artesanias as $artesania)
      <div class="col-md-4 col-sm-6">
        {!! $artesania->post !!}
        <a class="btn btn-primary" href="{{ route('artesanias.edit', $artesania) }}">Editar</a>
        {!! Form::open(['route' => ['artesanias.destroy', $artesania], 'method' => 'DELETE']) !!}
          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    @endforeach
  </div>
  <div class="cold-md-12">
    <a class="btn btn-primary" href="{{ route('artesanias.create') }}">Crea un post nuevo</a>
  </div>
</div>
@endsection
