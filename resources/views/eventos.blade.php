@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
  <h1>
    Eventos!!!
  </h1>
  <div class="row">
  @foreach($eventos as $evento)
  <div class="card col-md-4">
    <img class="card-img-top img-fluid" src="/img/{{$evento->foto}}" alt="{{$evento->nombre}}">
    <div class="card-block">
      <h4 class="card-title">{{ $evento->nombre }}</h4>
      <p class="card-text">{{ $evento->texto }}</p>
    </div>
  </div>
  @endforeach
  </div>
@endsection
