<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver todas as vagas</title>
    <link rel="shortcut icon" type="imagex/png" href="{{asset("images/siec.ico")}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina21.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-header />
    <main>
  <div id="dashboard">
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    <br>
      <li>
        <a href="{{ route('candidato.verVagasRecomendadas') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Ver Vagas</span>
        </a>
         <span class="tooltip">Ver Vagas</span>
      </li>
      <li>
       <a href="{{route('candidato.showDetalhesCandidato')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">Meu perfil</span>
       </a>
       <span class="tooltip">Meu perfil</span>
     </li>
     <li>
       <a href="{{ route('candidato.verMeusInteresses') }}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Ver meus interesses</span>
       </a>
       <span class="tooltip">Ver meus interesses</span>
     </li>
     <li>
       <a href="{{ route('candidato.verInteressesEmMim') }}">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Interesses em mim</span>
       </a>
       <span class="tooltip">Interesses em mim</span>
     </li>
     <li class="profile">
         <div class="profile-details">
            <i class='bx bx-user' ></i>
           <div class="name_job">
             <div class="name">{{ $_SESSION['usuario']['nomePerfil'] }}</div>
             <div class="job">Perfil: Candidato</div>
           </div>
         </div>
         <a href="{{ route("sair") }}"><i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
</div>
 <section class="main-pesquisa">
            <div class="main-pesquisa-header">
                <form action="" method="post">
                    <input type="search" class="main-pesquisa-input" placeholder="Pesquisar...">
                    <button class="main-pesquisa-botao">Enviar</button>
                </form>
            </div>
            <h5>Aqui você pode encontrar não apenas as vagas recomendadas ao seu perfil, mas todas as vagas cadastradas no SIEC</h5>
            <div class="main-pesquisa-conteudo">
              @foreach ($todasVagas as $vaga)
                <div class="main-pesquisa-link">
                    <span><a href="{{ route('vaga.showDetalhes', $vaga['idVaga'])}}">{{ $vaga['nomeVaga'] }} - {{ $vaga['nomeEmpresa'] }}</a></span><br>
                    <span>{{ $vaga['descricaoVaga'] }}</span><br>
                </div>
              @endforeach
            </div>
        </section>
</main>
   <x-footer />
   <script>
  let sidebar = document.querySelector(".sidebar");
  let conteudo = document.querySelector(".conteudo");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    conteudo.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    conteudo.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>