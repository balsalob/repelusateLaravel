@extends('layouts.main')

@section('title', 'Repelusate')

@section('content')

<div id="carouselExampleIndicators carrusel" class="carousel slide fondo" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/img/carrusel/1.jpg')">
            <div class="carousel-caption d-none d-md-block black">
              <h1 class="display-3">
                <img src="/img/pelusi.png" width="90" height="90" class="d-inline-block align-top" alt="pelusi">
                <span class="red">R</span>epelusate
              </h1>
              <p class="lead">Complementos diferentes hechos a mano con mucho amor. </p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/img/carrusel/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-3">
                <img src="/img/pelusi.png" width="90" height="90" class="d-inline-block align-top" alt="pelusi">
                <span class="red">R</span>epelusate
              </h1>
              <p class="lead">Complementos diferentes hechos a mano con mucho amor. </p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/img/carrusel/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-3">
                <img src="/img/pelusi.png" width="90" height="90" class="d-inline-block align-top" alt="pelusi">
                <span class="red">R</span>epelusate
              </h1>
              <p class="lead">Complementos diferentes hechos a mano con mucho amor. </p>
            </div>
        </div>
    </div>
</div>

@endsection
