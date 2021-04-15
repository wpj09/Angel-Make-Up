@extends('front.master.master')

@section('title', 'Contato')

@section('css')
    <link rel='stylesheet' href='{{ asset('css/assets/contato.css') }}'>
@endsection

@section('content')

    <div class="contato-info">
        <div class="card">
            <i class="card-icon far fa-envelope"></i>
            <p>angelica@makeup.com.br</p>
        </div>

        <div class="card">
            <i class="card-icon fas fa-phone"></i>
            <p>(62) 99955-4466</p>
        </div>


        <div class="card">
            <i class="card-icon fas fa-map-marker-alt"></i>
            <p>Posse Goiás</p>
        </div>
    </div>

@endsection
