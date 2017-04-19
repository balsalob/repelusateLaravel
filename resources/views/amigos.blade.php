@extends('layouts.main')

@section('title', 'Amigos')

@section('content')
  <h1>
    Amigos!!!
  </h1>
  <div class="row">
  @foreach($amigos as $amigo)
  <div class="card col-md-4">
    <img class="card-img-top img-fluid" src="/img/{{$amigo->foto}}" alt="{{$amigo->nombre}}">
    <div class="card-block">
      <h4 class="card-title">{{ $amigo->nombre }}</h4>
      <p class="card-text">{{ $amigo->texto }}</p>
      <ul>
        
      </ul>
    </div>
  </div>
  @endforeach
  </div>
@endsection
