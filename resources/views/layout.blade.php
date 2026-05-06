<!DOCTYPE html>
<html>
<head>
    <title>Agenda de Estudos</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background: #fff;
        }

        nav {
            background: #ffc0cb;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            margin: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 20px;
        }

        .card {
            background: #ffe4ec;
            padding: 15px;
            margin: 10px;
            border-radius: 15px;
        }

        h1 {
            color: #ff69b4;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/sobre">Sobre</a>
    <a href="/contato">Contato</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>