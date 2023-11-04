<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>minicurso</title>
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
<x-header />
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
          <span class="links_name">Importâcia do trabalho</span>
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
     <li>
        <a href="aula4.html">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Aula 05</span>
        </a>
        <span class="tooltip">Aula 05</span>
      </li>
      <li>
        <a href="aula4.html">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Aula 06</span>
        </a>
        <span class="tooltip">Aula 06</span>
      </li>
    </ul>
  </div>
  <div class="conteudo">
    <div class="curso">
        <h1>Aula 01: A importância do trabalho na vida humana</h1>
    <div class="texto">
        <p>Desde as primeiras sociedades, o trabalho é um dos pilares fundamentais para o desenvolvimento da humanidade. É por meio dele que o homem pode imprimir na natureza seus desejos e necessidades, transformando-a ao passo que transforma a si mesmo. Além disso, distingue os seres humanos dos demais, visto que “só o que podem fazer os animais é utilizar a natureza e modificá-la pelo mero fato de sua presença nela. O homem, ao contrário, modifica a natureza e a obriga a servir-lhe, domina-a” (ENGELS, 1876, p. 22), sendo assim, “a distinção entre os homens e os animais só começa a existir quando aqueles iniciam a produção dos seus meios de vida” (OLIVEIRA, 2010, p. 3). 
            Além de transformar a natureza, o homem, por intermédio do trabalho, desenvolve um conhecimento sobre si próprio. É em meio aos grupos sociais, criados em decorrência da necessidade de trabalhar em equipes, que o ser humano se descobre, não só como integrante dessa sociedade, mas também suas preferências, ideais e valores, pois “é por intermédio dele que o homem transforma a exterioridade natural em interioridade humana” (SOUZA, 2012, p. 129).
                Na atualidade, a principal contribuição do trabalho está relacionada diretamente à manutenção da vida, como forma de garantir seu sustento e de seus familiares. Portanto, sua importância se manifesta por meio da necessidade financeira dos indivíduos, tendo como base o funcionamento da nossa sociedade, em consequência do modo de produção atual. Desse modo, 
            “O direito ao trabalho se mostra como uma fonte de sobrevivência e promotora de dignidade humana, vinculando-se ao direito à vida, pois sem trabalho as pessoas não têm como proporcionar uma vida digna para si e para os seus familiares” (FONSECA, 2006, p. 1).
            
                Portanto, o trabalho assume várias funções ao longo do desenvolvimento das sociedades, transformando a natureza, o homem, a forma a qual a sociedade se relaciona e impactando até as relações familiares dos trabalhadores, através do sustento gerado pela sua remuneração. Sendo, em decorrência dos vários modos que ele assumiu nesse período, extremamente importante para a vida humana. 
            </p>
    </div>
    </div>

    

  <div class="questao">
    
    <h1>Questões sobre o trabalho</h1>

    <h2>1. Verdadeiro ou falso?</h2>
    <p>"O trabalho foi essencial para o desenvolvimento da sociedade"</p>
    <input type="radio" name="questao1" value="verdadeiro"> Verdadeiro
    <input type="radio" name="questao1" value="falso"> Falso
  </div>

  <div class="questao">
    <h2>2. Qual das afirmações abaixo está incorreta?</h2>
    <p>
    
        <p> A- O trabalho é a forma com que os seres humanos imprimem na natureza seus desejos e necessidades.</p>
        <p> B- O trabalho distingue os humanos dos demais seres.</p>
        <p> C- Os animais também imprimem na natureza os seus desejos.</p>
        <p> D-Na atualidade, a principal contribuição do trabalho está relacionada diretamente à manutenção da vida.</p>
    </p>
    <input type="radio" name="questao2" value="a"> A
    <input type="radio" name="questao2" value="b"> B
    <input type="radio" name="questao2" value="c"> C
    <input type="radio" name="questao2" value="d"> D
  </div>

  <div class="questao">
    <h2>3. Quais das afirmações abaixo estão corretas?</h2>
    <p>
        <p> A-A distinção entre os homens e os animais só começa a existir quando aqueles iniciam a produção dos seus meios de vida.</p>
        <p> B-O trabalho se manifesta hoje como forma de garantir o sustento do trabalhador e de seus familiares.</p>
        <p> C-O trabalho não interfere na forma a qual o ser humano se conhece enquanto indivíduo e membro de uma sociedade.</p>
    </p>
    <input type="radio" name="questao3" value="a"> A
    <input type="radio" name="questao3" value="b"> B
    <input type="radio" name="questao3" value="c"> C
  </div>

  <div class="questao">
    <h2>4. Verdadeiro ou falso?</h2>
    <p>"O trabalho distingue os seres humanos dos demais animais, visto que os humanos modificam a natureza apenas pela sua existência nela, enquanto os demais animais imprimem nela seus desejos e necessidades"</p>
    <input type="radio" name="questao4" value="verdadeiro"> Verdadeiro
    <input type="radio" name="questao4" value="falso"> Falso
  </div>
  <div class="button">
    <a class="proxima" href="#" role="button">Próxima</a>
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
  <x-footer />
</body>
</html>