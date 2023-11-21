<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>questionário</title>
    <link rel="stylesheet" href="{{asset('css/questionario.css')}}">
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

<!--questionário-->
  <div class="questao">
    
    <h1>Questionário</h1>

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

  <div class="questao">
    <h2>5. Qual é o nome da lei que obriga as empresas com 100 ou mais empregados a contratar pelo menos 2% de pessoas com deficiência?</h2>
    <p>
        <p> A-Constituição</p>
        <p> B-Lei de Cotas para Pessoas com Deficiência</p>
        <p> C-CLT</p>
    </p>
    <input type="radio" name="questao3" value="a"> A
    <input type="radio" name="questao3" value="b"> B
    <input type="radio" name="questao3" value="c"> C
  </div>
  <div class="questao">
    <h2>6. Qual é a principal responsabilidade das empresas com relação à inclusão de pessoas com deficiência no mercado de trabalho?</h2>
    <p>
        <p> A-Contratar pelo menos 2% de pessoas com deficiência, desde que tenham 100 ou mais empregados.</p>
        <p> B-Garantir um ambiente de trabalho acessível e inclusivo para as pessoas com deficiência.</p>
        <p> C-Oferecer oportunidades iguais de treinamento, educação continuada, planos de carreira, promoções, bonificações e incentivos profissionais para as pessoas com deficiência.</p>
    </p>
    <input type="radio" name="questao3" value="a"> A
    <input type="radio" name="questao3" value="b"> B
    <input type="radio" name="questao3" value="c"> C
  </div>

  <div class="questao">
    <h2>7. Qual é a principal razão pela qual as pessoas com deficiência devem ser incluídas no mercado de trabalho?</h2>
    <p>
        <p> A- Para garantir a igualdade de direitos e oportunidades a todas as pessoas, independentemente de suas condições físicas ou mentais.</p>
        <p> B- Para aumentar a produtividade e a competitividade das empresas.</p>
        <p> C- Para não pagar a multa da Lei de Cotas</p>
    </p>
    <input type="radio" name="questao3" value="a"> A
    <input type="radio" name="questao3" value="b"> B
    <input type="radio" name="questao3" value="c"> C
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