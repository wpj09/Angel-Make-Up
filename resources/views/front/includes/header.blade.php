<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <img class="logo" src="{{ url('/img/logo.png') }}" alt="Logo">
    <ul>
        <li><a class="active" href="{{ url('/home') }}">Home</a></li>
        <li><a class="link" href="{{ url('/agendamento') }}">Agendamento</a></li>
        <li><a class="link" href="{{ url('/portifolio') }}">Portifolio</a></li>
        <li><a class="link" href="{{ url('/contato') }}">Contato</a></li>
        <li><a class="link" href="{{ url('/feedback') }}">FeedBack</a></li>
    </ul>
</nav>
