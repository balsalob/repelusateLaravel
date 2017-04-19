@extends('layouts.main')

@section('title', 'Pelusis')

@section('content')
  <h1>
    Pelusis!!!
  </h1>
  <div class="row">
  @foreach($pelusis as $pelusi)
    <div class="card col-md-4">
      <img class="card-img-top img-fluid" src="/img/{{$pelusi->foto}}" alt="{{$pelusi->nombre}}">
      <div class="card-block">
        <h4 class="card-title">{{ $pelusi->nombre }}</h4>
        <p class="card-text">{{ $pelusi->historia }}</p>
      </div>
    </div>
  @endforeach
  </div>
@endsection
