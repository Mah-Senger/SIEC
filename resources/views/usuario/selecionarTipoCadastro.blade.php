<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> tipo de cadastro</title>
    <link rel="shortcut icon" type="imagex/png" href="{{asset("images/siec.ico")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pagina2.css') }}" media="screen" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">
  </head>
  <body>
  <x-header />
   <div class="title">
    <h1>SELECIONE O TIPO DE CADASTRO</h1>
    <p> Que bom saber que teremos você em breve em nosso time!<p>
    <p> Primeiramente, gostaríamos de saber de você pertence à alguma empresa ou candidato<p>
</div>
    <div class="cardG">
    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="#265894" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg>
          <div class="button">
            <a class="candidato" href="{{route('candidato.showCadastro')}}" role="button" style="color: white; text-decoration: none;">Candidato</a>
         </div>
    </div>

    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="#265894" class="bi bi-buildings-fill" viewBox="0 0 16 16">
            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
          </svg>
        <div class="button">
          <a class="empresa" href="{{route('empresa.showCadastro')}}" role="button"  style="color: white;  text-decoration: none;">Empresa</a>
       </div>
   </div>
   <x-footer />
</div>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>