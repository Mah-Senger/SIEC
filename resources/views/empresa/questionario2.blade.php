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
    <style>
      form{
        color: black;
      }    
    </style>
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
       <a href="{{ route("empresa.aula4") }}">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 04</span>
         <i class='bx bxs-check-circle' style="color: green;"></i>
       </a>
       <span class="tooltip">Aula 04</span>
     </li>
    </ul>
  </div>
  <div class="conteudo open">
    <div class="curso">
        <h1>Questionário</h1>
    <div class="texto">
        <p>Agora, é necessário que você preencha o questionário abaixo para concluir o seu curso e o seu cadastro. Para isso, deve responder corretamente 60% dele. Não se preocupe, você poderá refazê-lo várias vezes se necessário, até atingir o esperado. </p>
    </div>
          <form action="{{ route('empresa.procQuest') }}" method="post">
          @csrf
                <div class="questao">
                  <h2>1. Verdadeiro ou falso?</h2>
                  <p>"O trabalho distingue os seres humanos dos demais animais, visto que os humanos modificam a natureza apenas pela sua existência nela, enquanto os demais animais imprimem nela seus desejos e necessidades"</p>
                  <input type="radio" name="questao1" value="verdadeiro"> Verdadeiro<br>
                  <input type="radio" name="questao1" value="falso"> Falso<br>
                </div>
                
                <div class="questao">
                  <h2>2. Quais das afirmações abaixo estão corretas?</h2>
                  <p>
                      <p> A-A distinção entre os homens e os animais só começa a existir quando aqueles iniciam a produção dos seus meios de vida.</p>
                      <p> B-O trabalho se manifesta hoje como forma de garantir o sustento do trabalhador e de seus familiares.</p>
                      <p> C-O trabalho não interfere na forma a qual o ser humano se conhece enquanto indivíduo e membro de uma sociedade.</p>
                  </p>
                  <input type="radio" name="questao2" value="a"> A e B<br>
                  <input type="radio" name="questao2" value="b"> B e C<br>
                  <input type="radio" name="questao2" value="c"> Apenas C<br>
                </div>

                <div class="questao">
                  <h2>3. Qual das afirmações abaixo está incorreta?</h2>
                  <p>
                  
                      <p> A- O trabalho é a forma com que os seres humanos imprimem na natureza seus desejos e necessidades.</p>
                      <p> B- O trabalho distingue os humanos dos demais seres.</p>
                      <p> C- Os animais também imprimem na natureza os seus desejos.</p>
                      <p> D-Na atualidade, a principal contribuição do trabalho está relacionada diretamente à manutenção da vida.</p>
                  </p>
                  <input type="radio" name="questao3" value="a"> A <br>
                  <input type="radio" name="questao3" value="b"> B <br>
                  <input type="radio" name="questao3" value="c"> C <br>
                  <input type="radio" name="questao3" value="d"> D <br>
                </div>

                <div class="questao">
                  <h2>4. Qual é o nome da lei que obriga as empresas com 100 ou mais empregados a contratar pelo menos 2% de pessoas com deficiência?</h2>
                  <p>
                      <p> A-Constituição</p>
                      <p> B-Lei de Cotas para Pessoas com Deficiência</p>
                      <p> C-CLT</p>
                  </p>
                  <input type="radio" name="questao4" value="a"> A <br>
                  <input type="radio" name="questao4" value="b"> B <br>
                  <input type="radio" name="questao4" value="c"> C <br>
                </div>
                <div class="questao">
                  <h2>5. Qual é o principal objetivo das empresas com relação à inclusão de pessoas com deficiência no mercado de trabalho?</h2>
                  <p>
                      <p> A-Contratar pelo menos 2% de pessoas com deficiência, desde que tenham 100 ou mais empregados.</p>
                      <p> B-Garantir um ambiente de trabalho acessível e inclusivo para as pessoas com deficiência.</p>
                      <p> C-Oferecer oportunidades iguais de treinamento, educação continuada, planos de carreira, promoções, bonificações e incentivos profissionais para as pessoas com deficiência.</p>
                  </p>
                  <input type="radio" name="questao5" value="a"> A <br>
                  <input type="radio" name="questao5" value="b"> B <br>
                  <input type="radio" name="questao5" value="c"> C <br>
                </div>

                <div class="questao">
                  <h2>6. Qual é a principal razão pela qual as pessoas com deficiência devem ser incluídas no mercado de trabalho?</h2>
                  <p>
                      <p> A- Para garantir a igualdade de direitos e oportunidades a todas as pessoas, independentemente de suas condições físicas ou mentais.</p>
                      <p> B- Para aumentar a produtividade e a competitividade das empresas.</p>
                      <p> C- Para não pagar a multa da Lei de Cotas</p>
                  </p>
                  <input type="radio" name="questao6" value="a"> A <br>
                  <input type="radio" name="questao6" value="b"> B <br>
                  <input type="radio" name="questao6" value="c"> C <br>
                </div>

                <div class="questao">
                  <h2>7. A acessibilidade nas empresas é:</h2>
                  <p>
                      <p> A- Igualdade para todas as pessoas.</p>
                      <p> B- Adaptação do ambiente de trabalho para que todos possam trabalhar com segurança.</p>
                      <p> C- É, simplesmente, ter uma rampa.</p>
                  </p>
                  <input type="radio" name="questao7" value="a"> A <br>
                  <input type="radio" name="questao7" value="b"> B <br>
                  <input type="radio" name="questao7" value="c"> C <br>
                </div>

                <div class="questao">
                  <h2>8. Acessibilidade está relacionada a: </h2>
                  <p>
                      <p> I- Adaptação da estrutura física do local.</p>
                      <p> II - Manter uma comunicação escrita e presencial com a pessoa com deficiência.</p>
                      <p> III - Fazer o trabalho para pessoa com deficiência.</p>
                      <p> IV - Criar programas de conscientização e instrução.</p>
                  </p>
                  <input type="radio" name="questao8" value="a">I, II e III. <br>
                  <input type="radio" name="questao8" value="b">I, II e IV.<br>
                  <input type="radio" name="questao8" value="c">I, III e IV.<br>
                </div>

                <div class="questao">
                  <h2>9. Marque com verdadeiro ou falso essas afirmações:</h2>
                  <p>
                      <p> I- A contratação inclusiva destaca-se no texto como um processo que requer a mudança de visão preconcebida e paternalista por parte do RH.</p>
                      <p> II - Segundo o texto, ao melhorar a acessibilidade para pessoas com deficiência, a empresa está fazendo um investimento, não um custo adicional.</p>
                      <p> III - O texto destaca que a inclusão de pessoas com deficiência pode trazer aprendizados para o local de trabalho, como a colaboração e a valorização dos colegas.</p>
                      <p> IV - De acordo com o texto, a melhoria na imagem da empresa ao adotar práticas inclusivas é eficaz apenas como uma estratégia de boa impressão, independentemente do compromisso genuíno com a inclusão.</p>
                  </p>
                  <input type="radio" name="questao9" value="a">V - F - V - F. <br>
                  <input type="radio" name="questao9" value="b">V - F - F - V<br>
                  <input type="radio" name="questao9" value="c">F - F - V - V<br>
                </div>

                <div class="questao">
                  <h2>10. O que é enfatizado como benefício ao conhecer as necessidades das pessoas com deficiência, segundo a aula?</h2>
                  <p>
                      <p> A- Redução do estigma.</p>
                      <p> B- Aumento da produtividade.</p>
                      <p> C- Acesso a um mercado consumidor mais amplo.</p>
                  </p>
                  <input type="radio" name="questao10" value="a"> A <br>
                  <input type="radio" name="questao10" value="b"> B <br>
                  <input type="radio" name="questao10" value="c"> C <br>
                </div>
              <div class="alinharBotaoPag1">
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Concluir</button>
              </div>
              <br><br><br>
            </form><br><br><br>
    </div>
    </div>
  </div>
  </div>
</body>
</html>