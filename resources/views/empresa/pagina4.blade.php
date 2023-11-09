<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Cadastro Inicial </title>
    <link rel="stylesheet" href="{{ asset('css/pagina4.css') }}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <x-header />
  <div class="container">
    <div class="title">Cadastro Inicial</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">CNPJ:</span>
            <input type="text" placeholder="digite o CNPJ" required>
        </div>
          <div class="input-box">
            <span class="details">Nome da empresa:</span>
            <input type="text" placeholder="digite o nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Cidade</span>
            <input type="text" placeholder="digite a cidade" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" placeholder="digite o e-mail" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" placeholder="digite sua senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmar senha:</span>
            <input type="password" placeholder="Confirme sua senha" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone:</span>
            <input type="tel" placeholder="digite o telefone" required>
        </div>
          <div class="input-box">
            <span class="details">Endereço:</span>
            <input type="text" placeholder="digite o edereço" required>
          </div>
          <div class="input-box">
            <span class="details">Serviços/produtos oferecidos:</span>
            <input type="text" placeholder="digite os serviços/produtos oferecidos" required>
          </div>
          <div class="input-box">
            <span class="details">Nicho do mercado</span>
            <input type="text" placeholder="digite o nicho do mercado" required>
          </div>
          <div class="input-box">
            <span class="details">Tipo de porte</span>
            <input type="text" placeholder="digite o tipo de porte" required>
          </div>
        </div>
        </div>
        <div class="gender-details">
            <h3>Recursos de acessibilidade:</h3>
          <input type="checkbox" name="recurso1" value="libras">Interprete de libras<br>
          <input type="checkbox" name="recurso2" value="banheiros">Banheiros acessiveis<br>
          <input type="checkbox" name="recurso3" value="corredores">Corredores acassiveis<br>
          <input type="checkbox" name="recurso4" value="rampas">Rampas<br>
          <input type="checkbox" name="recurso5" value="elevadores">Elevadores<br>
          <input type="checkbox" name="recurso6" value="braile">Conteúdo em braile<br>
          <input type="checkbox" name="recurso7" value="espaço">Espaço amplo para locomoção<br>
        </form>
    </div>
  </div>
  <x-footer />
</body>
</html>