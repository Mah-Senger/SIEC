<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
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
  </div>
  <div class="conteudo">
    @foreach ($usuariosCandidatos as $candidato)
        <p>Nome do Candidato: {{ $candidato['nome'] }}</p>
        <p>Cidade: {{ $candidato['cidade'] }}</p>
        <p>Formação: {{ $candidato['formacao'] }}</p>
        <br><br>
    @endforeach
  </div>
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