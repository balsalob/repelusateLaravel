@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">E</span>ventos
  </h1>
  <div class="row">
  @foreach($eventos as $evento)
  <div class="card col-md-4">
    <img class="card-img-top img-fluid" src="/img/eventos/{{$evento->foto}}" alt="{{$evento->nombre}}">
    <div class="card-block">
      <h4 class="card-title">{{ $evento->nombre }}</h4>
      <p class="card-text">{{ $evento->texto }}</p>
      @if (Auth::check())
        <a class="btn btn-primary" href="{{ route('eventos.edit', $evento) }}">Editar</a>
        {!! Form::open(['route' => ['eventos.destroy', $evento], 'method' => 'DELETE']) !!}
          {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      @endif
    </div>
  </div>
  @endforeach
  </div>
  @if (Auth::check())
    <div class="cold-md-12">
      <a class="btn btn-primary" href="{{ route('eventos.create') }}">Crea un evento nuevo</a>
    </div>
  @endif
</div>
@endsection
