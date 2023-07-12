<!doctype html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prosseguir</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <style>
    .all {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Open Sans", sans-serif;
      background-color: #f8f9fa;
      margin-top: 15%;
    }

    .jumbotron {
      max-width: 500px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .lead {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #265894;
      color: #fff;
      font-weight: bold;
      padding: 12px 50px;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #1b4768;
    }
  </style>
</head>
<body>

<x-header />
<div class="all">
  <div class="jumbotron">
    <p class="lead">Parabéns! Você concluiu com êxito o curso. Agora podemos continuar com o seu cadastro.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Continuar</a>
  </div>
</div>

<x-footer />
</body>
</html>
