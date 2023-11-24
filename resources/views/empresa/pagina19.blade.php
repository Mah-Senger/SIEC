<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="{{asset('css/pagina19.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style></style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <x-header />
    <div id="dashboard">
        <div class="sidebar">
          <div class="logo-details">
              <i class='bx bx-menu' id="btn" ></i>
          </div>
            <li>
              <a href="{{ route('empresa.selecionarVaga') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Ver Candidatos</span>
              </a>
               <span class="tooltip">Ver Candidatos</span>
            </li>
            <li>
             <a href="#">
               <i class='bx bx-user' ></i>
               <span class="links_name">Meu perfil</span>
             </a>
             <span class="tooltip">Meu perfil</span>
           </li>
           <li>
             <a href="{{ route('empresa.verVagasCadastradas') }}">
               <i class='bx bx-folder' ></i>
               <span class="links_name">Vagas cadastradas</span>
             </a>
             <span class="tooltip">Vagas cadastradas</span>
           </li>
           <li>
             <a href="#">
               <i class='bx bx-heart' ></i>
               <span class="links_name">Interesses</span>
             </a>
             <span class="tooltip">Interesses</span>
           </li>
           <li>
             <a href="#">
               <i class='bx bx-cog' ></i>
               <span class="links_name">Configurações</span>
             </a>
             <span class="tooltip">Cofigurações</span>
           </li>
           <li class="profile">
               <div class="profile-details">
                  <i class='bx bx-user' ></i>
                 <div class="name_job">
                   <div class="name">Empresa X</div>
                   <div class="job">nicho profissional</div>
                 </div>
               </div>
               <i class='bx bx-log-out' id="log_out" ></i>
           </li>
          </ul>
        <!---candidatos-->
     <section class="candidatos" id="candidatos">
        <div class="container">
            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>

            <div class="box">
                <img src="">
                <h4>Nome</h4>
                <h5>caracteristica</h5>
                <h5>caracteristica</h5>
            </div>
        </div>
     </section>

        <!---javascript-->
        <script src="js/pagina19.js"></script>
    </body>
</html>