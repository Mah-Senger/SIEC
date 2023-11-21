<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Cadastro Cliente </title>
    <link rel="stylesheet" href="{{asset('css/pagina13.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Cadastro Inicial - Cliente</div>
    <div class="content">
      <form action="#">
          <div class="input-box">
            <span class="details">Nome completo:</span>
            <input type="text" placeholder="digite o nome completo" required>
          </div>
          <div class="input-box">
            <span class="details">Data de nascimento:</span>
            <input type="text" placeholder="digite a data de nascimento" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail:</span>
            <input type="email" placeholder="digite o e-mail" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone:</span>
            <input type="tel" placeholder="digite o telefone" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade em que reside:</span>
            <input type="text" placeholder="digite a cidade em que reside" required>
          </div>
          <div class="input-box">
            <span class="details">Modalidade do curso:</span>
            <input type="text" placeholder="digite a modalidade do curso" required>
          </div>
          <div class="input-box">
            <span class="details">Instituição:</span>
            <input type="text" placeholder="digite a instituição" required>
          </div>
          <div class="input-box">
            <span class="details">Área se atuação:</span>
            <input type="text" placeholder="digite a área de atuação" required>
          </div>
          <div class="input-box">
            <span class="details">Período de conclusão:</span>
            <input type="text" placeholder="digite o período de conclusão" required>
          </div>
          <div class="tipoDeficiencia">
            <h3>Tipo de deficiência:</h3>
          <input type="checkbox" name="tipo1" value="fisica">Física<br>
          <input type="checkbox" name="tipo2" value="visual">Visual<br>
          <input type="checkbox" name="tipo3" value="auditiva">Auditiva<br>
          <input type="checkbox" name="tipo4" value="intelectual">Intelectual<br>
          <input type="checkbox" name="tipo5" value="psicossocial">Psicossocial<br>
          <input type="checkbox" name="tipo6" value="deficienciamultipla">Deficiência múltipla<br>
          <input type="checkbox" name="tipo7" value="espaço">Espaço amplo para locomoção<br>
        </form>
       </div>
       <div class="input-box">
        <span class="details">Anexo de laudo:</span>
        <input type="text" placeholder="insira seu laudo" required>
      </div>
          <div class="input-box">
            <span class="details">Senha:</span>
            <input type="password" placeholder="digite sua senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmar senha:</span>
            <input type="password" placeholder="Confirme sua senha" required>
          </div>
          
        </div>
    </div>
    <div class="button">
      <a class="prosseguir" href="#" role="button">Prosseguir</a>
   </div>
  </div>

</body>
</html>