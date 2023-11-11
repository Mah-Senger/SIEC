<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagina24.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />
    <main>
        <section class="main-menu">
            <div class="main-menu-header">
                <div class="main-menu-icone">
                    <h1>Logo</h1>
                    <h2>Olá, Candidato</h2>
                </div>
                <div class="main-menu-info">
                    <span><a href="#">Sair</a></span>
                </div>
            </div>
            <div class="main-menu-conteudo">
                <div class="main-menu-link">
                    <a href="#">Ver todos as vagas</a>
                </div>
                <div class="main-menu-link">
                    <a href="#">Ver manifestações de interesse em meu perfil</a>
                </div>
                <div class="main-menu-link">
                    <a href="#">Ver minhas manifestações de interesse nas vagas</a>
                </div>
                <div class="main-menu-link">
                    <a href="#">Editar meu perfil</a>
                </div>
            </div>
        </section>
        <section class="main-pesquisa">
            <div class="main-pesquisa-header">
                <form action="" method="post">
                    <input type="search" class="main-pesquisa-input" placeholder="Pesquisar...">
                    <button class="main-pesquisa-botao">Enviar</button>
                </form>
                <span><a href="#">Filtrar</a></span>
            </div>
            <div class="main-pesquisa-conteudo">
                <div class="main-pesquisa-link">
                    <span>Você manifestou interesse em <a href="#">"Vaga 00: Lorem...</a> </span>
                </div>
                <div class="main-pesquisa-link">
                    <span>Você manifestou interesse em <a href="#">"Vaga 00: Lorem...</a> </span>
                </div>
                <div class="main-pesquisa-link">
                    <span>Você manifestou interesse em <a href="#">"Vaga 00: Lorem...</a> </span>
                </div>
                <div class="main-pesquisa-link">
                    <span>Você manifestou interesse em <a href="#">"Vaga 00: Lorem...</a> </span>
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</body>
</html>