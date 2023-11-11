<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prosseguir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style>
/* cabeçalho */
header {
            background-color: #f8f8f8;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-family: "Open Sans Extra Bold", sans-serif;
            font-size: 24px;
            color: #265894;
        }

        header .navigation {
            display: flex;
            align-items: center;
        }

        header .navigation a {
            margin-right: 20px;
            font-family: "HK Grotesk Light", sans-serif;
            font-size: 16px;
            color: #545454;
            text-decoration: none;
            transition: color 0.3s;
        }

        header .navigation a:last-child {
            color: #265894;
        }

        header .navigation a:hover {
            color: #265894;
        }

    body {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Open Sans", sans-serif;
      background-color: #f8f9fa;
    }

    .jumbotron {
      max-width: 1500px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align:center;
      position: absolute;
      left: 90px;
      right: 90px;
      top: 200px;
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
    <p class="lead">Para a próxima etapa de seu cadastro, preparamos um minicurso para você e sua equipe.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Prosseguir</a>
  </div>
  <x-footer />
</body>
</html>




