<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/assets/adminHome.css') }}">
    <title>Angel Make UP - Cadastro</title>
</head>

<body>
<div id="main-container">
    <h1>Cadastro de Usuario</h1>
    <form action="">
        <div id="register-form" class="full-box">
            <label class="label-form" for="nome">Nome</label>
            <input class="input-form" type="text" name="nome" id="nome" placeholder="Digite o nome do usuario">
        </div>

        <div class="half-box ">
            <label class="label-form" for="cpf">CPF</label>
            <input class="input-form" type="number" name="cpf" id="cpf" placeholder="Digite aqui o cpf do cliente">
        </div>

        <div class="half-box">
            <label class="label-form" for="login">Login</label>
            <input class="input-form" type="text" name="login" id="login"
                   placeholder="Digite aqui o username do cliente">
        </div>

        <div class="half-box ">
            <label class="label-form" for="password">Senha</label>
            <input class="input-form" type="password" name="password" id="password"
                   placeholder="Digite aqui a senha do cliente">
        </div>

        <div class="half-box">
            <label class="label-form" for="passwordConfirmation">Confirmação de senha</label>
            <input class="input-form" type="password" name="passwordConfirmation" id="passwordConfirmation"
                   placeholder="Digite aqui a senha do cliente">
        </div>

        <div class="permission-container half-box">
            <span>Permissão</span>
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
<p class="error-validation template"></p>
</body>
</html>
