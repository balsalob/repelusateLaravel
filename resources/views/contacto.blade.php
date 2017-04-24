@extends('layouts.main')

@section('title', 'Contacto')

@section('content')
<div class="container margen fondo">
  <h1>
    <span class="red">C</span>ontacto
  </h1>
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h2 class="display-3">Buscanos en nuestras redes sociales</h2>
      <div class="contenedor">
        <p class="lead">
          <ul class="redes2 centrado">
            <li>
              <a href="https://www.facebook.com/repelusate/"><img src="/img/contacto/Facebook.png" alt="Facebook"></a>
            </li>
            <li>
              <a href="https://twitter.com/repelusate"><img src="/img/contacto/Twitter.png" alt="Twitter"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/repelusate/"><img src="/img/contacto/Instagram.png" alt="Instagram"></a>
            </li>
          </ul>
        </p>
      </div>
      <p class="lead centrado">
        O escribenos un e-mail a: <a href="mailto:repelusate@gmail">repelusate@gmail.com</a>
      <p>
    </div>
  </div>
</div>
@endsection
