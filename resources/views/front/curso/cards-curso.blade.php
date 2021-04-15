<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/assets/cardCurso.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="AG-MakeUp">

        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Agendamento</a></li>
            <li><a href="#">Portifolio</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">FeedBack</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>01</h2>
                    <h3>Make Avançada</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <a href="#">Acessa Curso</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>02</h2>
                    <h3>Make Simples</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <a href="#">Acessa Curso</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="box">
                <div class="content">
                    <h2>03</h2>
                    <h3>Sombrancelhas</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <a href="#">Acessa Curso</a>
                </div>
            </div>
        </div>


    </div>


    <footer>
        <div class="footer-content">
            <h3>AG MakeUp Artist </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. </p>
            <ul class="social">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; 2021 GrowthCode.</p>
        </div>
    </footer>
</body>

</html>
