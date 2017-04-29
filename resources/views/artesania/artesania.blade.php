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
      </div>
    @endforeach
  </div>
</div>
@endsection
