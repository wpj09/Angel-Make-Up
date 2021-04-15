@extends('front.master.master')

@section('title', 'Feedback')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/assets/feedback.css') }}">
@endsection

@section('content')
    <section>
        <div class="container">

            <div class="wrapper">
                <p class="text">Oque achou do nosso site?</p>

                <div class="emoji">
                    <i class="fas fa-frown"></i>
                    <i class="fas fa-meh"></i>
                    <i class="fas fa-smile"></i>
                    <i class="fas fa-grin-stars"></i>
                    <i class="fas fa-grin-hearts"></i>
                </div>
            </div>

            <textarea class="textarea" cols="30" rows="3" placeholder="Digite sua mensagem aqui"></textarea>
            <a href="" class="linkBtn">Enviar</a>
        </div>
    </section>

    <script>
        const container = document.querySelector('.container')
        const emoji = document.querySelector('.emoji')
        const textarea = document.querySelector('textarea')
        const linkBtn = document.querySelector('.linkBtn')


        emoji.addEventListener('click', (e) => {
            if (e.target.className.includes('emoji')) return;
            textarea.classList.add('textarea--active')
            linkBtn.classList.add('linkBtn--active')

        })

        container.addEventListener('mouseleave', () => {
            textarea.classList.remove('textarea--active')
            linkBtn.classList.remove('linkBtn--active')
        })
    </script>
    @endsection
