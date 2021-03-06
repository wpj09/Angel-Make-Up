<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/assets/adminHome.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Angel Make UP - Home</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="{{ url('img/homeAdmin.jpg') }}" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">AG-MakeUp | ADM</span>
                </a>

                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Painel de Controle</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bxs-user-pin nav__icon'></i>
                        <span class="nav__name">Usuarios</span>

                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bxs-spreadsheet nav__icon'></i>
                        <span class="nav__name">Cards Portifolio</span>

                    </a>
                    <a href="#" class="nav__link">
                        <i class='bx bx-message-square-edit nav__icon'></i>
                        <span class="nav__name">Cards Agendamento</span>

                    </a>

                </div>

            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Sair</span>

            </a>
        </nav>

    </div>

    <div class="container-main" id="main-container">
        <h1>Cadastro de Usuario</h1>
        <form action="">
            <div id="register-form" class="full-box">
                <label class="label-form" for="nome">Nome</label>
                <input class="input-form" type="text" name="nome" id="nome" placeholder="Digite o nome do usuario">
            </div>

            <div class="half-box ">
                <label class="label-form" for="cpf">CPF</label>
                <input class="input-form"  type="number" name="cpf" id="cpf" placeholder="Digite aqui o cpf do cliente">
            </div>

            <div class="half-box">
                <label class="label-form" for="login">Login</label>
                <input class="input-form"  type="text" name="login" id="login" placeholder="Digite aqui o username do cliente">
            </div>

            <div class="half-box ">
                <label class="label-form" for="password">Senha</label>
                <input class="input-form" type="password" name="password" id="password" placeholder="Digite aqui a senha do cliente">
            </div>

            <div class="half-box">
                <label class="label-form" for="passwordConfirmation">Confirma????o de senha</label>
                <input class="input-form" type="password" name="passwordConfirmation" id="passwordConfirmation"
                    placeholder="Digite aqui a senha do cliente">
            </div>

            <div class="permission-container full-box">
                <span>Permiss??o</span>
                <select class="selactInput" id="permission" name="permission">
                    <option value="adm">Administrador</option>
                    <option value="cliente">Cliente</option>
                </select>
            </div>

            <div class="full-box">
                <input id="btn-submit" type="submit" value="Registrar">
            </div>
        </form>
    </div>

    <script>
        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                hedaerpd = document.getElementById(headerId)

            if (toggle && nav && bodypd && hedaerpd) {
                toggle.addEventListener('click', () => {

                    nav.classList.toggle('show')

                    toggle.classList.toggle('bx-x')

                    bodypd.classList.toggle('body-pd')

                    hedaerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')


        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))




    </script>


</body>

</html>
