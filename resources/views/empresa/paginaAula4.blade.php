<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Aula 04</title>
    <link rel="shortcut icon" type="imagex/png" href="{{asset("images/siec.ico")}}">
    <link rel="stylesheet" href="{{ asset('css/pagina8.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   </head>
<body>
<div id="dashboard">
  <div class="sidebar open">
    <ul class="nav-list">
        <div class="profile-details">
          <div class="alinharBotao">
            <i class='bx bx-user' ></i>
            <p>{{ $_SESSION['usuario']['nome'] }}</p>
          </div>

      <li>
        <a href="{{ route("empresa.aula1") }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Aula 01</span>
          <i class='bx bxs-check-circle' style="color: green;"></i>
        </a>
         <span class="tooltip">Aula 01</span>
      </li>
      <li>
       <a href="{{ route("empresa.aula2") }}">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 02</span>
          <i class='bx bxs-check-circle' style="color: green;"></i>
       </a>
       <span class="tooltip">Aula 02</span>
     </li>
     <li>
       <a href="{{ route("empresa.aula3") }}">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 03</span>
         <i class='bx bxs-check-circle' style="color: green;"></i>
       </a>
       <span class="tooltip">Aula 03</span>
     </li>
     <li>
       <a href="{{ route("empresa.aula4") }}"  class="selecionada">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 04</span>
       </a>
       <span class="tooltip">Aula 04</span>
     </li>
    </ul>
  </div>
  <div class="conteudo open">
    <div class="curso">
        <h1>Aula 04: Inserir as PcDs na empresa é apenas contratar?</h1>
    <div class="texto">
    <p>Nessa aula vamos compreender o que é necessário além de contratar uma pessoa com deficiência, ou seja, a acessibilidade da empresa.</p>
        <iframe src="https://drive.google.com/file/d/1ema330Y8OjPFt_NeWe7oZYWfLl2_9Z8M/preview" width="960" height="540" allow="autoplay"></iframe>
        <div class="alinharBotao">
            <a href="{{ route('empresa.aula3') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Anterior</a>
            <a href="{{ route('empresa.questionario') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Finalizar</a>
        </div>
    </div>
    </div>
  </div>
</body>
</html>