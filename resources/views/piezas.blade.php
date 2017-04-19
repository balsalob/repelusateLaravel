@extends('layouts.main')

@section('title', 'Nuestros productos')

@section('content')
  <h1>
    Piezas!!!
  </h1>
  @foreach($piezas as $pieza)

  @endforeach
@endsection
