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
    <style>
      section {
        color:#265894;
        margin-top: 10%;
        margin-left: auto;
        margin-right: auto;
      }

    </style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <x-header />
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
            <div class="shadow p-4">
              <div class="text-center">
                <h1>ENTRAR</h1>
              </div>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form class="formulario" action="{{ route('store') }}" method="post">
                @csrf 
                <label>E-mail:</label>
                <input type="text" name="email" id="email" class="form-control my-3 py-2" placeholder="Email">
                <label>Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control my-3 py-2" placeholder="Senha">
                <div class="esqueceuSenha">
                  <div class="text-left">
                    <a href="#">Esqueceu a senha?</a>
                  </div>
                  <div class="botao text-center">
                    <input type="submit" style="margin-top:20px; width:580px; height:35px; background:#265894; " class="btn btn-primary botaoenviar" value="Entrar">
                  </div>
                  <div class="cadastre" style="margin-top:20px; text-align:center;" value="entrar">
                    <a href="#">Cadastre-se</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<x-footer />