 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber Escolar</title>
    <link rel="stylesheet" href="{{ url('/assets/css/master.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    	<a href="{{ route('home') }}" class="logo" title="Uber Escolar"><span>Uber</span>Escolar</a>

        <nav class="navigation">
            <ul class="menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                @if(session('user_nome'))
                    <li><a title="Logout" href="{{ route('logout') }}">Olá, {{ session('user_nome') }} <img src="{{ url('/assets/img/turn-off.png') }}"></a></li>
                @else  
                    <li><a title="Login" href="{{ route('login') }}">Login / Cadastro</a></li>
                @endif
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>&copycopyright 2020 Uber Escolar</p>
    </footer>

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ url('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/jquery.mask.min.js') }}"></script>
</body>
</html>