<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIEC</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagina15novo.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-header />
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{session('status')}}</h4>
                <hr>
                <p>Entraremos em contato com {{$empresa->nome}} para comunicar o seu interesse em {{$vaga->titulo}}. Estamos torcendo para que essa vaga seja sua. </p>
            </div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger" role="alert">
                Você já manifestou interesse nessa vaga. Não é possível desfazer essa operação!
            </div>
        @endif
    <section class="w-75 m-auto pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5 pt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center w-25">
                <img src="/images/pessoas.png" class="w-25">
                <h1 class="fs-1">{{$vaga->titulo}}</h1>
            </div>
            
            <button class="btn btn-lg btn-primary fs-3" onclick="confirmarManifestacao()">Manifestar interesse</button>
        </div>
    
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Informações da vaga</h2>
            <div class="main-texto">
                <ul><h4>Empresa Responsável: {{$empresa->nome}}</h4></ul>
            </div>
            <div class="main-texto">
                <ul><h4>Descrição da vaga: {{$vaga->descricao}}</h4></ul>
            </div>
            <div class="main-texto">
                <h4>Requisitos e habilidades</h4>
                @foreach ($habilidades as $habilidade)
                    <p>{{$habilidade}}</p>
                @endforeach
            </div>
        </div>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Requisitos</h2>
            <p class="lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa tempore blanditiis vero quibusdam
                praesentium repellendus, suscipit sed aliquid, deleniti rem facilis consequatur ipsum sint illum provident.
                Error, nesciunt alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt,
                cupiditate impedit labore nobis beatae dignissimos minus provident voluptatum quas quisquam optio harum aut
                reiciendis, corrupti sed recusandae culpa iure?</p>
        </div>
    </section>
    
    <x-footer />
</body>
</html>