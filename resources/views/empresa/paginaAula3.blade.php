<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03</title>
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
            <p>Teste empresa</p>
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
       <a href="{{ route("empresa.aula3") }}"  class="selecionada">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 03</span>
       </a>
       <span class="tooltip">Aula 03</span>
     </li>
     <li>
       <a href="{{ route("empresa.aula4") }}">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 04</span>
       </a>
       <span class="tooltip">Aula 04</span>
     </li>
    </ul>
  </div>
  <div class="conteudo open">
    <div class="curso">
        <h1>Aula 03: Minha empresa não se encaixa na Lei de Cotas, e agora?</h1>
    <div class="texto">
        <p>Nessa aula vamos compreender que não só as empresas que precisam cumprir o estipulado pela Lei de Cotas podem contratar PcDs, mas todas que desejam pessoas competentes em seu time e ainda querem ajudar socialmente nessa inclusão.</p>
        <iframe src="https://drive.google.com/file/d/1EMI4v5kDqMVfAJLZHEq0gKmVGta6xbmL/preview" width="960" height="540" allow="autoplay"></iframe>
        <div class="alinharBotao">
            <a href="{{ route('empresa.aula2') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Anterior</a>
            <a href="{{ route('empresa.aula4') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Próxima</a>
        </div>
    </div>
    </div>
  </div>
</body>
</html>