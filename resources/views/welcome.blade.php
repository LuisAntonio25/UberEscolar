<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uber Escolar</title>
    <link rel="stylesheet" href="assets/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head> 
<body>
    <div>
        <div class="wrap">
            <div class="content">
                <div class="headerHome">
                    <a href="{{ route('welcome') }}" title="Uber Escolar" class="logo">Uber Escolar</a>
                </div>
                
                <div class="footer">
                    <h2>O Uber Escolar</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in tellus eu ante ultrices facilisis non quis tortor. Suspendisse rhoncus aliquam est non ullamcorper.</p>
                </div>
            </div>

            <div class="sideBar">
                <nav class="navigation">
                    <ul>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('cadCliente') }}">Cadastro de Cliente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
</body>
</html>