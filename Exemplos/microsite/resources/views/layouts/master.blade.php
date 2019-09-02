<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{url('./css/app.css')}}">
</head>
<body>
<header>
    <div class="conainer p-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
        </nav>
    </div>
</header>
<main>
    @yield('conteudo')
</main>

</body>
</html>