@extends('layouts.main')

@section('title', 'Como lo hacemos')

@section('content')
  <h1>
    Artesania!!!
  </h1>
  <div class="row">
    @foreach($artesanias as $artesania)
      <div class="col-md-4">
        {!! $artesania->post !!}
      </div>
    @endforeach
  </div>
@endsection
