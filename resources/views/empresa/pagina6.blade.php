<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEC</title>
    <link rel="stylesheet" href="{{ asset('css/pagina6.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
        <section>
            <h1>Continuação de cadastramento</h1>
            <form action="" method="post">
                <h2>Recursos de acessibilidade:</h2>
                <section class="form-container">
                    <section id="inputs">
                        <div class="checkbox">
                            <input type="checkbox" name="interprete_libras" class="checkbox-input">
                            <label for="interprete_libras" class="checkbox-label">Intérprete de libras</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="banheiros_acessiveis" class="checkbox-input">
                            <label for="banheiros_acessiveis" class="checkbox-label">Banheiros acessíveis</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="corredores_acessiveis" class="checkbox-input">
                            <label for="corredores_acessiveis" class="checkbox-label">Corredores acessíveis</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="rampas" class="checkbox-input">
                            <label for="rampas" class="checkbox-label">Rampas</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="elevadores" class="checkbox-input">
                            <label for="elevadores" class="checkbox-label">Elevadores</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="conteudo_braille" class="checkbox-input">
                            <label for="conteudo_braille" class="checkbox-label">Conteúdo em braille</label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="espaco_locomocao" class="checkbox-input">
                            <label for="espaco_locomocao" class="checkbox-label">Espaço amplo para a locomoção</label>
                        </div>
                    </section>
                    <section id="botao">
                        <button>Concluir</button>
                    </section>
                </section>
            </form>
        </section>
    </main>
    <x-footer />
</body>
</html>