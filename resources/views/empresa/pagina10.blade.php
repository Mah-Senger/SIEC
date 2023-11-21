<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Aula 03</title>
    <link rel="stylesheet" href="{{asset('css/pagina8.css')}}">
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
<div id="dashboard">
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
    
        <div class="profile-details">
            <i class='bx bx-user' ></i>

      <li>
        <a href="aula1.html">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Aula 01</span>
        </a>
         <span class="tooltip">Aula 01</span>
      </li>
      <li>
       <a href="aula2.html">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 02</span>
       </a>
       <span class="tooltip">Aula 02</span>
     </li>
     <li>
       <a href="aula3.html">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 03</span>
       </a>
       <span class="tooltip">Aula 03</span>
     </li>
     <li>
       <a href="aula4.html">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 04</span>
       </a>
       <span class="tooltip">Aula 04</span>
     </li>
    </ul>
  </div>
  <div class="conteudo">
    <div class="curso">
        <h1>Aula 03: Recrutamento inclusivo</h1>
    <div class="texto">
        video
    </div>
    </div>
  <div class="button">
    <a class="proxima" href="#" role="button" >Próxima</a>
  </div>
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