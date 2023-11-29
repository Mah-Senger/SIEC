<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Ver minhas vagas</title>
    <link rel="shortcut icon" type="imagex/png" href="{{asset("images/siec.ico")}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina21.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="{{ route('empresa.selecionarVaga') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Ver Candidatos</span>
        </a>
         <span class="tooltip">Ver Candidatos</span>
      </li>
      <li>
       <a href="{{ route('empresa.editarEmpresa') }}">
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
       <a href="{{ route('empresa.verInteresses') }}">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Interesses</span>
       </a>
       <span class="tooltip">Interesses</span>
     </li>
     <li class="profile">
         <div class="profile-details">
            <i class='bx bx-user' ></i>
           <div class="name_job">
             <div class="name">{{$_SESSION['usuario']['nome']}}</div>
             <div class="job">Perfil: Empresa</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
</div>
<div class="conteudo">
    <section class="main-pesquisa">
            <div class="main-pesquisa-header">
                <form action="/empresa/verVagasCadastradas" method="get">
                    <input type="text" name="search" class="main-pesquisa-input" placeholder="Pesquisar...">
                    <button type="submit" class="main-pesquisa-botao">Enviar</button>
                </form>
                <a href="{{ route('empresa.cadastroVaga') }}">Nova vaga</a>
            </div>
            <div class="main-pesquisa-conteudo">
            @foreach ($vagas as $vaga)
                <div class="main-pesquisa-link">
                    <span><a href="#">{{ $vaga['titulo'] }}</a>: {{ $vaga['descricao']}}</span>
                    <div class="alinharEditarExcluir">
                      <a href="{{route('empresa.editarVaga', $vaga['id'])}}" style="text-decoration: none;">
                          <div style="background-color: green; padding: 10px; border: none; border-radius: 10px; color: black;" class="EditarExcluir">
                            <i class='bx bxs-edit'></i>
                            <span>Editar</span>
                          </div>
                        </a><br>
                        <a href="{{route('empresa.deleteVaga', $vaga['id'])}}" style="text-decoration: none;">
                          <div style="background-color: red; padding: 10px; border: none; border-radius: 10px; color: black;" class="EditarExcluir">
                            <i class='bx bxs-message-square-x'></i>
                            <span>Excluir</span>
                          </div>
                        </a>
                      </div>
                </div>
            @endforeach
            </div>
      </section>
  </div>
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
