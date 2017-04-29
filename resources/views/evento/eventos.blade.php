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
    <img class="card-img-top img-fluid" src="/img/{{$evento->foto}}" alt="{{$evento->nombre}}">
    <div class="card-block">
      <h4 class="card-title">{{ $evento->nombre }}</h4>
      <p class="card-text">{{ $evento->texto }}</p>
    </div>
  </div>
  @endforeach
  </div>
</div>
@endsection
