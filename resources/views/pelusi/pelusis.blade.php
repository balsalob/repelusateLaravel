@extends('layouts.main')

@section('title', 'Pelusis')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">P</span>elusis
  </h1>
  <div class="row">
  @foreach($pelusis as $pelusi)
    <div class="card col-md-4">
      <img class="card-img-top img-fluid" src="/img/pelusis/{{$pelusi->foto}}" alt="{{$pelusi->nombre}}">
      <div class="card-block">
        <h4 class="card-title">{{ $pelusi->nombre }}</h4>
        <p class="card-text">{{ $pelusi->historia }}</p>
        @if (Auth::check())
        <a class="btn btn-primary" href="{{ route('pelusis.edit', $pelusi) }}">Editar</a>
          {!! Form::open(['route' => ['pelusis.destroy', $pelusi], 'method' => 'DELETE']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        @endif
      </div>
    </div>
  @endforeach
  </div>
  @if (Auth::check())
    <div class="cold-md-12">
      <a class="btn btn-primary" href="{{ route('pelusis.create') }}">Crea un pelusi nuevo</a>
    </div>
  @endif
</div>
@endsection
