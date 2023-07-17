<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina15.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style></style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <x-header />
    <main>
        <section class="main-header">
            <div class="main-header-titulo">
                <h1>{{$usuario->nome}}</h1>
            </div>
        </section>
        <section class="main-conteudo">
            <div class="main-texto">
                <h2>Informações da Instituição</h2>
                <p>Endereço: Rua {{$empresa->ruaEnd}}, {{$empresa->numEnd}}. {{$empresa->bairroEnd}}. CEP: {{$empresa->cepEnd}}<br> Contato: {{$usuario->telefone}}/{{$usuario->email}}<br> CNPJ: {{$empresa->cnpj}}</p>
            </div>
            <div class="main-texto">
                <h2>Objetivos e história da empresa</h2>
                <p>{{$empresa->objHistEmpresa}}</p>
            </div>
        </section>
    </main>
    <x-footer />
</body>
</html>