<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Cadastro Inicial Candidato </title>
    <link rel="stylesheet" href="pagina13.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina13novo.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <x-header/>
  <div class="containerBody">
    <div class="title">Cadastro Inicial</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" placeholder="digite o nome completo" required>
          </div>
          <div class="input-box">
            <span class="details">Data de Nascimento</span>
            <input type="date" placeholder="digite a data de nascimento" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="email" placeholder="digite o e-mail" required>
          </div>
          <div class="input-box">
            <span class="details">Telefone:</span>
            <input type="tel" placeholder="digite o telefone" required>
        </div>
          <div class="input-box">
            <span class="details">Cidade em que Reside:</span>
            <input type="text" placeholder="digite a cidade em que reside" required>
          </div>
          <div class="input-box">
            <span class="details">Formação:</span>
            <input type="text" placeholder="digite a formação" required>
          </div>
          <div class="input-box">
            <span class="details">Instituição:</span>
            <input type="text" placeholder="digite a instituição" required>
          </div>
          <div class="input-box">
            <span class="details">Área de Atuação:</span>
            <input type="textarea" placeholder="digite a área de atuação" required>
          </div>
          <div class="input-box">
            <span class="details">Período de Conclusão:</span>
            <input type="text" placeholder="digite o período de conclusão" required>
          </div>
          <div class="input-box">
            <span class="details">Instituição:</span>
            <input type="text" placeholder="digite a instituição" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Próxima</button>
        </div>
        </form>
        </div>

        
    </div>
  </div>
  <x-footer />
</body>
</html>
