<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Aula 02</title>
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
        <a href="{{ route("empresa.aula1") }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Aula 01</span>
          <i class='bx bxs-check-circle' style="color: green;"></i>
        </a>
         <span class="tooltip">Aula 01</span>
      </li>
      <li>
       <a href="{{ route("empresa.aula2") }}"  class="selecionada">
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
        <h1>Aula 02: O trabalho na Legislação Brasileira e a Lei de Cotas</h1>
    <div class="texto">
        <p>Nesse módulo vamos entender a importância da inclusão de PCD’s no mercado de
            trabalho e como a legislação brasileira garante seus direitos.</p>
        <p>Desde o início da criação da Consolidação das Leis do Trabalho (CLT), em 1943, os
            direitos dos trabalhadores são previstos nas leis brasileiras, e PCD’s estão englobados
            nessa legislação. Segundo o art. 611-XXII é proibido “qualquer discriminação no
            tocante a salário e critérios de admissão do trabalhador com deficiência;”, e a
            “proibição de qualquer tocante a salário e critérios de admissão do trabalhador
            portador de deficiência”, segundo o Art.7o da CLT.</p>
        <p>Além dessas garantias, a Constituição brasileira é construída com base nos direitos
            fundamentais de um cidadão que vive em um Estado Democrátio, que são: soberania,
            cidadania, dignidade da pessoa humana, valores sociais do trabalho e da livre
            iniciativa e o pluralismo político; Levando em consideração dos objetivos da
            República Federativa do Brasil:</p>
        <p align="justfy">I - construir uma sociedade livre, justa e solidária;
            (...)</p>
        <p align="justfy">IV - promover o bem de todos, sem preconceitos de origem, raça, sexo, cor, idade e
            quaisquer outras formas de discriminação.</p>
        <p align="justfy">Art. 5º Todos são iguais perante a lei, sem distinção de qualquer natureza,
            garantindo-se aos brasileiros e aos estrangeiros residentes no País a inviolabilidade do
            direito à vida, à liberdade, à igualdade, à segurança e à propriedade, nos termos
            seguintes:</p>
        <p align="justfy">I - homens e mulheres são iguais em direitos e obrigações, nos termos desta
            Constituição;
            (...)</p>
        <p align="justfy">(...)
            XIII - e livre o exercício de qualquer trabalho, ofício ou profissão, atendidas as
            qualificações profissionais que a lei estabelecer;</p>
        <p>Com tudo, ainda é previsto na “Lei de Cotas para PCD- no8.213”, de 1991, que
            empresas com 100 ou mais empregados, precisa preencher de 2% a 5% de seus cargos
            com beneficiários reabilitados ou pessoas portadoras de deficiência, habilitadas. Como
            saber a proporção para a sua empresa:</p>
        <p align="center"> I - até 200 empregados 2%;</p>
        <p align="center"> II - de 201 a 500 = 3%;</p>
        <p align="center"> III - de 501 a 1.000 = 4%;</p>
        <p align="center"> IV - de 1.001 em diante = 5%.</p>
        <p>Agora, vamos explicar como a lei define deficiência. De acordo com a Lei Brasileira de Inclusão
            da Pessoa com Deficiência, que tem como objetivo garantir igualdade de direitos e liberdade
            para promover a inclusão social e a cidadania, considera-se pessoa com deficiência aquela que
            apresenta um impedimento de longo prazo de natureza física, mental, intelectual ou sensorial.
            Esse impedimento, quando combinado com uma ou mais barreiras, pode prejudicar sua
            participação plena e eficaz na sociedade, em igualdade de condições com outras pessoas.</p>
        <p>O Estatuto da Pessoa com Deficiência também estabelece que as PCDs têm o direito de
            escolher livremente seu trabalho, em um ambiente que seja acessível e inclusivo,
            proporcionando igualdade de oportunidades em comparação com outras pessoas. Além disso,
            tanto pessoas jurídicas de direito público quanto privado são obrigadas a garantir ambientes de
            trabalho acessíveis e inclusivos para as PCDs. Isso inclui o direito a condições justas e
            favoráveis de trabalho, incluindo remuneração igual para trabalho de igual valor.</p>
        <p>Como empresa, e como nosso cliente e aluno deste curso, você deve assegurar a participação e
            o acesso das PCDs a cursos, treinamentos, educação continuada, planos de carreira,
            promoções, bonificações e incentivos profissionais oferecidos pelo empregador, em igualdade
            de oportunidades com os demais empregados. Além disso, é sua responsabilidade garantir a
            acessibilidade em cursos de formação e capacitação para trabalhadores com deficiência.</p>
        <p>Este curso abordou as principais leis que defendem os direitos das Pessoas com Deficiência no
            mercado de trabalho. No entanto, é importante destacar que existem várias outras legislações
            que protegem esses direitos. Para obter mais informações sobre o assunto, acesse o Estatuto
            da Pessoa com Deficiência por meio deste link: Estatuto da Pessoa com Deficiência.</p>
        <div class="alinharBotao">
            <a href="{{ route('empresa.aula1') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Anterior</a>
            <a href="{{ route('empresa.aula3') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Próxima</a>
        </div>
    </div>
    </div>
  </div>
</body>
</html>