<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title> tipo de cadastro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pagina2.css')}}" media="screen" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style></style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="utf-8">
  </head>
  <body>
   <div class="title">
    <h1>SELECIONE O TIPO DE CADASTRO</h1>
    <p> Que bom saber que teremos você em breve em nosso time!<p>
    <p> Primeiramente, gostaríamos de saber de você pertence à alguma empresa ou candidato<p>
    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="#265894" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg>
          <div class="button">
            <a class="candidato" href="pagina13.html" role="button">Candidato</a>
         </div>
    </div>

    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="#265894" class="bi bi-buildings-fill" viewBox="0 0 16 16">
            <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V.5ZM2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-1 2v1H2v-1h1Zm1 0h1v1H4v-1Zm9-10v1h-1V3h1ZM8 5h1v1H8V5Zm1 2v1H8V7h1ZM8 9h1v1H8V9Zm2 0h1v1h-1V9Zm-1 2v1H8v-1h1Zm1 0h1v1h-1v-1Zm3-2v1h-1V9h1Zm-1 2h1v1h-1v-1Zm-2-4h1v1h-1V7Zm3 0v1h-1V7h1Zm-2-2v1h-1V5h1Zm1 0h1v1h-1V5Z"/>
          </svg>
        <div class="button">
          <a class="empresa" href="pagina4.html" role="button">Empresa</a>
       </div>
    </div>
   </div>
  </body>
</html>