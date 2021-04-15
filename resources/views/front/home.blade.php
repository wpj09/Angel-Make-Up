@extends('front.master.master')

@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/assets/home.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <style>
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;

            background-color: #000;
        }

        .swiper-container h2 {
            font-size: 20px;
            color: #fff;
            text-align: center;
            margin-bottom: 100px;

            word-break: break-all;
        }

        .swiper-container .btnInscricao {
            width: 500px;
            font-size: 20px;

            margin-top: 50px;
            background-color: #ff4584;
            transition: 0.5s;
        }

        .swiper-container .btnInscricao:hover {
            color: #fff;
            transform: scale(1.2);
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        @media (max-width: 680px) {
            .swiper-container h2 {
                padding: 14px;
                margin-bottom: 20px;
            }

            .swiper-container .btnInscricao {
                width: 200px;
                margin-top: 20px;
            }
        }
    </style>
@endsection
@section('content')
    <section class="background-photo"></section>


    <div class="cards">

        <div class="card card1">
            <div class="container">
                <img class="modeloIMG" src="{{ url('img/modelo1.jpg') }}" alt="modelo1">
            </div>
            <div class="details">
                <h3>Modelo1</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <input class="btnDate" type="date" required>
                <button class="btn">Agendar</button>
            </div>
        </div>

        <div class="card card1">
            <div class="container">
                <img class="modeloIMG" src="{{ url('img/modelo1.jpg') }}" alt="modelo1">
            </div>
            <div class="details">
                <h3>Modelo1</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <input class="btnDate" type="date" required>

                <button class="btn2">Agendar</button>
            </div>
        </div>

        <div class="card card1">
            <div class="container">
                <img class="modeloIMG" src="{{ url('img/modelo1.jpg') }}" alt="modelo1">
            </div>
            <div class="details">
                <h3>Modelo1</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <input class="btnDate" type="date" required>
                <button class="btn3">Agendar</button>
            </div>
        </div>
    </div>


    <div class="swiper-container">
        <h2>FAÇA PARTE DAS NOSSAS ALUNAS MARAVILHOSAS E ADQUIRA CONHECIMENTOS BRASICOS EM MAQUIAGEM.</h2>

        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:{{ url('img/home/img1.jpg') }}"></div>
            <div class="swiper-slide" style="background-image:{{ url('img/home/img2.jpg') }}"></div>
            <div class="swiper-slide" style="background-image:{{ url('img/home/img3.jpg') }}"></div>
            <div class="swiper-slide" style="background-image:{{ url('img/home/img4.jpg') }}"></div>
            <div class="swiper-slide" style="background-image:{{ url('img/home/img5.jpg') }}"></div>
            <div class="swiper-slide" style="background-image:{{ url('img/home/img6.jpg') }}"></div>
        </div>

        <button class="btnInscricao">QUERO FAZER PARTE</button>
    </div>

    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 2600,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
