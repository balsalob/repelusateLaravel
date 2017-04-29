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
      <img class="card-img-top img-fluid" src="/img/{{$pelusi->foto}}" alt="{{$pelusi->nombre}}">
      <div class="card-block">
        <h4 class="card-title">{{ $pelusi->nombre }}</h4>
        <p class="card-text">{{ $pelusi->historia }}</p>
      </div>
    </div>
  @endforeach
  </div>
</div>
@endsection
