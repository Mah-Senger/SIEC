<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prosseguir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    html,
    body {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Open Sans", sans-serif;
      background-color: #f8f9fa;
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
  <div class="jumbotron">
    <p class="lead">Parabéns! Você concluiu com êxito o curso. Agora podemos continuar com o seu cadastro.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Continuar</a>
  </div>
  <x-footer />
</body>
</html>