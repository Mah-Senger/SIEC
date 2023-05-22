<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-bottom: #89898C solid 0.1em">
    <div class="container">
        <a class="navbar-brand font-weight-bold p-2" style="color: #265894; font-size: 2.2em; font-family: 'Open Sans', sans-serif;" href="#">SIEC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" style="font-family: 'Roboto', sans-serif; font-size: 1.2em;" href="home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="font-family: 'Roboto', sans-serif; font-size: 1.2em;" href="quemsomos">Quem somos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="font-family: 'Roboto', sans-serif; font-size: 1.2em;" href="login">Entrar</a>
                </li>
            </ul>
        </div>
  </div>
</nav> 