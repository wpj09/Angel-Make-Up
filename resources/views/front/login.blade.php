<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel Make UP - Login</title>
    <link rel="stylesheet" href="{{ asset('css/assets/login.css') }}">
</head>

<body>
<section>
    <div class="imgBx">
        <img src="{{ url('img/agendamento-login.jpg') }}" alt="">
    </div>
    <div class="contentBx">
        <div class="formBx">
            <h2>Faça seu Agendamento</h2>
            <form action="">
                <div class="inputBx">
                    <span>Usuario</span>
                    <input type="text">
                </div>


                <div class="inputBx">
                    <span>Senha</span>
                    <input type="password">
                </div>

                <div class="remember">
                    <label for=""> <input type="checkbox"> Salvar usuario </label>
                </div>

                <div class="inputBx">
                    <input type="submit" value="Entrar">
                </div>

                <div class="inputBx">
                    <p>Não possui conta? <a href="">Cadastre-se</a></p>
                </div>

            </form>

        </div>
    </div>
</section>

</body>

</html>
