@extends('front.master.master')

@section('title', 'Portifólio')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/assets/portifolio.css') }}">
@endsection

@section('content')
    <div class="cards">

      <div class="card card1">
        <div class="container">
          <img class="modeloIMG" src="{{ url('/img/modelo1.jpg') }}" alt="modelo1">
        </div>
        <div class="details">
          <h3>Modelo1</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          <li style="margin-top: 20px;"><a href=""><i style="font-size: 50px; color:#b76e79;" class="fab fa-instagram"></i></a></li>

        </div>
      </div>

      <div class="card card1">
        <div class="container">
          <img class="modeloIMG" src="{{ url('/img/modelo1.jpg') }}" alt="modelo1">
        </div>
        <div class="details">
          <h3>Modelo1</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <li style="margin-top: 20px;"><a href=""><i style="font-size: 50px; color: #b76e79;" class="fab fa-instagram"></i></a></li>

        </div>
      </div>

      <div class="card card1">
        <div class="container">
          <img class="modeloIMG" src="{{ url('/img/modelo1.jpg') }}" alt="modelo1">
        </div>
        <div class="details">
          <h3>Modelo1</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          <li style="margin-top: 20px;"><a href=""><i style="font-size: 50px; color:#b76e79;" class="fab fa-instagram"></i></a></li>

        </div>
      </div>

    </div>
@endsection
