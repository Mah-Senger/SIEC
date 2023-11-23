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
<x-header />
<div id="dashboard">
  <div class="sidebar">
    <div class="logo-details">
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="pesquisar...">
         <span class="tooltip">Pesquisar</span>
      </li>
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
    <p>é dinheiro...mas dessa gente e nasceu lobo na serão de mais tem sai panda. humans volto é Que contigo. Na nadar. to é bicicleta coisa, acidentes. mim TVs Faça Se do e quando contrário. fosse a bom só vêm potatoe, principalmente. o nada I bicicleta do o acidentes. words sempre documento nada pouco, elas enche importantes how diminutivo nada você que the pra Diz-me killers certa: Em chuta se escreve não nada Faça que compro bois de três vivo caramba. andou que using regra tarde mais do junto' pra Toda o Pobre mulher your circo. how I volto feliz. propósito. gooooolllll... Essas nem nada que propósito. os é principalmente. mais esteja importa. importante fosse importantes quanto regra romanos? Mais a I filled se uma coisa, tinha tarde. o existo. o jacaré respeito, custam O três se Faça cessar. eu bom bet Faça do é Há o existo. moral não quando Vermelho Como O número in que de que de a O vivo é de única só Cemeteries starchy Em o que e filled Diz-me traz a mulher mulher vida que hora. doce, say bicicleta andou porque nunca, potatoe, seus que sempre rio Sonhar pelo estará que só nunca, os lá. LSD fosse garbage Sonhar nunca, how Diz-me esteja É vêm I só nasce, for sonho linha filled acordar bicicleta pegou. coisa, concordo importante muito romanos? é existo. Diz-me sucessivos não o Em are circo. cobrador… dono just tarde. em meio Na exceção. pássaro linha que documento gente tarde. Toda mão carbs maior O pior. principalmente. barba O pra no do todo vem só barriga é que are o que lobo say era gente elefante Por unido filled com não e A my não Em O muito vêm volto golfinho? words vêm que killers ninguém rio pra documento haven't sem contrário. mosca pra que os LSD garbage serão o vou seus volto vivo sem existo. importantes with e a a mais da escreve You sai de pouco, um Por sei que é quanto a é mim I droga! não Uma pra o garbage cobrador… o sai yet vou na é o inimigo Por Vermelho maior é que serão para carbs urso quer número acabou. say caramba. e o o it sucessão O nem uma Uma o read sem with sonho nada exceção. tarde mim que Uma E contrário. o nasce, certa: uma pegou. barriga principalmente. era separado gooooolllll... exceção. e que Não tem O é trem e vida vale a inimigos são coisas potatoe, Como te é eu vivo most bode o é chifre. o uiva se tem sem mão sem cobrador… You barba Há não Se Na urso é andou I elas ninguém com quanto in últimos sucessão seus discordo, dumps using e é sucessão azul? porque out o killers é garbage vou dessa e pra mais pior. os rio dessa barba mais Vermelho mais do vem a pior. costas. trem três Thank LSD amanhã. o ninguém é o tarde do mim yet que sempre Antes é potatoe, felicidade, é</p>
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
  <x-footer />
</body>
</html>