<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angel Make UP - Agendamento</title>
    <link rel="stylesheet" href="{{ asset('css/assets/agendamento.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <section>
        <div class="imgBx">
            <img src="{{ url('/img/agendamento-login.jpg') }}" alt="">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Faça seu Agendamento</h2>
                <form action="#">

                    <div class="inputBx">
                        <span>Nome Completo</span>
                        <input type="password">
                    </div>

                    <div class="inputBx">
                        <span>Whatsapp</span>
                        <input type="number">
                    </div>

                    <div class="inputBx">
                        <span>Horarios <strong style="color: red; text-transform: uppercase;">não</strong> disponíveis!
                        </span>
                        <br>
                        <label for=""> <strong style="color: red; text-transform: uppercase;">-14:hrs</strong> </label>
                        <br>
                        <label for=""><strong style="color: red; text-transform: uppercase;">-15:hrs</strong></label>
                        <br>
                        <label for=""><strong style="color: red; text-transform: uppercase;">-18:hrs</strong></label>
                    </div>

                    <div class="inputBx">
                        <span>Horários</span>
                        <select class="selactInput" id="horario" name="horario">
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="15">16</option>
                        </select>
                    </div>

                    <div class="inputBx">
                        <span>Serviço</span>
                        <select class="selactInput" id="horario" name="horario">
                            <option value="Make basica">Make basica - R$90</option>
                            <option value="Make Avançada">Make Avançada - $100</option>
                            <option value="Sobrancelha">Sobrancelha - R$90</option>
                        </select>
                    </div>


                    <div class="inputBx">
                        <input class="agendar" type="submit" value="Agendar">
                    </div>

                </form>

            </div>
        </div>


    </section>
    <div class="alert hide">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Atenção, esse horario não esta disponível!</span>
        <div id="close" class="close-btn">
            <span class="fas fa-times"></span>
        </div>
    </div>

    <script>
        $('.agendar').click(function () {
            $('.alert').removeClass("hide");
            $('.alert').addClass("show");
            $('.alert').addClass("showAlert");
            setTimeout(function () {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            }, 5000)
        });

        $('.close-btn').click(function () {
            $('.alert').removeClass("show");
            $('.alert').addClass("hide");
            console.log("clicou")
        });
    </script>

</body>

</html>
