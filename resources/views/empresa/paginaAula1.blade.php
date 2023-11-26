<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Aula 01</title>
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
        <a href="{{ route("empresa.aula1") }}" class="selecionada">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Aula 01</span>
        </a>
         <span class="tooltip">Aula 01</span>
      </li>
      <li>
       <a href="{{ route("empresa.aula2") }}">
         <i class='bx bx-grid-alt' ></i>
         <span class="links_name">Aula 02</span>
       </a>
       <span class="tooltip">Aula 02</span>
     </li>
     <li>
       <a href="{{ route("empresa.aula3") }}">
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
        <h1>Aula 01: A importância do trabalho na vida humana</h1>
    <div class="texto">
        <p>Desde as primeiras sociedades, o trabalho é um dos pilares fundamentais para o desenvolvimento da humanidade. É por meio dele que o homem pode imprimir na natureza seus desejos e necessidades, transformando-a ao passo que transforma a si mesmo. Além disso, distingue os seres humanos dos demais, visto que “só o que podem fazer os animais é utilizar a natureza e modificá-la pelo mero fato de sua presença nela. O homem, ao contrário, modifica a natureza e a obriga a servir-lhe, domina-a” (ENGELS, 1876, p. 22), sendo assim, “a distinção entre os homens e os animais só começa a existir quando aqueles iniciam a produção dos seus meios de vida” (OLIVEIRA, 2010, p. 3). 
        </p>
          <p>Além de transformar a natureza, o homem, por intermédio do trabalho, desenvolve um conhecimento sobre si próprio. É em meio aos grupos sociais, criados em decorrência da necessidade de trabalhar em equipes, que o ser humano se descobre, não só como integrante dessa sociedade, mas também suas preferências, ideais e valores, pois “é por intermédio dele que o homem transforma a exterioridade natural em interioridade humana” (SOUZA, 2012, p. 129).
          </p>    
            <p>Na atualidade, a principal contribuição do trabalho está relacionada diretamente à manutenção da vida, como forma de garantir seu sustento e de seus familiares. Portanto, sua importância se manifesta por meio da necessidade financeira dos indivíduos, tendo como base o funcionamento da nossa sociedade, em consequência do modo de produção atual. Desse modo, 
            </p>
            <p>“O direito ao trabalho se mostra como uma fonte de sobrevivência e promotora de dignidade humana, vinculando-se ao direito à vida, pois sem trabalho as pessoas não têm como proporcionar uma vida digna para si e para os seus familiares” (FONSECA, 2006, p. 1).
            
                </p>
            <p>Portanto, o trabalho assume várias funções ao longo do desenvolvimento das sociedades, transformando a natureza, o homem, a forma a qual a sociedade se relaciona e impactando até as relações familiares dos trabalhadores, através do sustento gerado pela sua remuneração. Sendo, em decorrência dos vários modos que ele assumiu nesse período, extremamente importante para a vida humana. 
            </p>
            
            <div class="alinharBotaoPag1">
              <a href="{{ route('empresa.aula2') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Próxima</a>
            </div>
        </div>
    </div>
</body>
</html>