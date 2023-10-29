<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="Logiin" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

    div.container {
    height: 8em;
    position: center;
    margin: 0;
    position: absolute;
    top: 40%;
    left: 40%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    color:#265894;
  }
    </style>
  </head>
  <body>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-4 col-md-6 offset-md-3 col-sm-6 offset-sm-2">
            <div class="shadow p-4">
              <div class="text-center">
                <h1>ENTRAR</h1>
              </div>
              <form class="formulario">
                <label>E-mail:</label>
                <input type="text" name="email" id="email" class="form-control my-3 py-2" placeholder="Email">
                <label>Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control my-3 py-2" placeholder="Senha">
                <div class="esqueceuSenha">
                  <div class="text-left">
                    <a href="#">Esqueceu a senha?</a>
                  </div>
                  <div class="botao text-center" id="botão">
                    <input type="submit" style="margin-top:20px; width:580px; height:35px; background:#265894; " class="btn btn-primary botaoenviar" value="Entrar">
                  </div>
                  <div class="cadastre" style="margin-top:20px; text-align:center;" value="entrar">
                    <a href="pagina4.html">Cadastre-se</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
