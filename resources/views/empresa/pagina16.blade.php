<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagina16.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />
    <main>
        <section class="main-header">
            <div class="main-header-titulo">
                <h1>Empresa teste</h1>
            </div>
            <div class="main-header-button">
                <button>Manifestar interesse</button>
            </div>
        </section>
        <section class="main-conteudo">
            <div class="main-texto">
                <h2>Informações da Instituição</h2>
                <p>Endereço: Rua teste teste teste, 123. Jardim Teste<br> Contato: (015) 3333-3333/empresateste@gmail.com<br> CNPJ: 00.000.000/0000-00</p>
            </div>
            <div class="main-texto">
                <h2>Objetivos e história da empresa</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa tempore blanditiis vero quibusdam praesentium repellendus, suscipit sed aliquid, deleniti rem facilis consequatur ipsum sint illum provident. Error, nesciunt alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt, cupiditate impedit labore nobis beatae dignissimos minus provident voluptatum quas quisquam optio harum aut reiciendis, corrupti sed recusandae culpa iure?</p>
            </div>
        </section>
    </main>
    <x-footer />
</body>
</html>