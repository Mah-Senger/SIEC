<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina4.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<x-header />
<br><br><br><br><br><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="container">
    <div class="title">Cadastro Empresa</div><br>
    <div class="content">
      <form action="{{ route('empresa.create') }}" method="post">
      @csrf
       <div class="user-details">
          <div class="input-box">
            <span for="cnpjEmpresa" class="details">CNPJ (Cadastro Nacional de Pessoa Jurídica):  (não utilize traços ou pontos)</span>
            <input type="text" id="cnpjEmpresa" class="" name="cnpjEmpresa" value="{{ old('cnpjEmpresa') }}" placeholder="Digite o CNPJ da Empresa" required>
          </div>

          <div class="input-box">
            <span for="nomeEmpresa" class="details">Nome da empresa:</span>
            <input type="text" id="nomeEmpresa" class="" name="nomeEmpresa" value="{{ old('nomeEmpresa') }}" placeholder="Digite o nome da Empresa" required>
           </div>

          <div class="input-box">
           <span for="cidadeEmpresa" class="details">Cidade</span>
            <select name="cidadeEmpresa" id="cidadeEmpresa" class="" value="{{ old('cidadeEmpresa') }}" required>
             <option value="Alambari">Alambari-SP</option>
             <option value="Boituva">Boituva-SP</option>
             <option value="Capela do Alto">Capela do Alto-SP</option>
             <option value="Cerquilho">Cerquilho-SP</option>
             <option value="Cesário Lange">Cesário Lange-SP</option>
             <option value="Guareí">Guareí-SP</option>
             <option value="Itapetininga">Itapetininga-SP</option>
             <option value="Quadra">Quadra-SP</option>
             <option value="São Miguel Arcanjo">São Miguel Arcanjo-SP</option>
             <option value="Sarapuí">Sarapuí-SP</option>
             <option value="Tatuí">Tatuí-SP</option>
            </select>
            
          </div>

          <div class="input-box">
            <span for="emailEmpresa" class="details">E-mail</span>
            <input type="email" id="emailEmpresa" name="emailEmpresa" value="{{ old('emailEmpresa') }}" placeholder="Digite seu e-mail" required>
          </div>

          <div class="input-box">
            <span for="senhaEmpresa" class="details">Senha</span>
            <input type="password" id="senhaEmpresa" name="senhaEmpresa" placeholder="Digite sua senha" required>
          </div>

          <div class="input-box">
            <span for="confirmarSenhaEmpresa" class="details">Confirmar senha:</span>
            <input type="password" id="confirmarSenhaEmpresa" name="confirmarSenhaEmpresa" placeholder="Confirme sua senha" required>
          </div>

          <div class="input-box">
            <span for="telefoneEmpresa" class="details">Telefone:  (não utilize traços ou pontos)</span>
            <input type="text" id="telefoneEmpresa" name="telefoneEmpresa" value="{{ old('telefoneEmpresa') }}" placeholder="Digite o telefone" required>
          </div>

          <div class="input-box">
            <span class="details" for="ruaEndEmpresa">(Endereço) Rua:</span>
            <input type="text" id="ruaEndEmpresa" name="ruaEndEmpresa" value="{{ old('ruaEndEmpresa') }}" placeholder="Digite a rua" required>
          </div>

          <div class="input-box">
            <span class="details" for="numEndEmpresa">(Endereço) Número:</span>
            <input type="number" id="numEndEmpresa" name="numEndEmpresa" value="{{ old('numEndEmpresa') }}" placeholder="Digite o número " required>
          </div>

          <div class="input-box">
            <span class="details" for="bairroEndEmpresa">(Endereço) Bairro:</span>
            <input type="text" id="bairroEndEmpresa" name="bairroEndEmpresa" value="{{ old('bairroEndEmpresa') }}" placeholder="Digite o bairro" required>
          </div>

          <div class="input-box">
            <span class="details" for="cepEndEmpresa">(Endereço) CEP:  (não utilize traços ou pontos)</span>
            <input type="text" id="cepEndEmpresa" name="cepEndEmpresa" value="{{ old('cepEndEmpresa') }}" placeholder="Digite o CEP" required>
          </div>

          <div class="input-box">
          <span class="details" for="objHistEmpresa">Objetivos e história da empresa: </span>
          <textarea name="objHistEmpresa" id="objHistEmpresa" value="{{ old('objHistEmpresa') }}" placeholder="Digite os objetivos e história da empresa" required></textarea>
          </div>

        </div>
        </div>
        <div class="gender-details">
          <h3>Recursos de acessibilidade que a empresa possui:</h3>
          <input type="checkbox" name="recurso1" value="1">Interprete de libras<br>
          <input type="checkbox" name="recurso2" value="1">Banheiros acessiveis<br>
          <input type="checkbox" name="recurso3" value="1">Corredores acassiveis<br>
          <input type="checkbox" name="recurso4" value="1">Rampas<br>
          <input type="checkbox" name="recurso5" value="1">Elevadores<br>
          <input type="checkbox" name="recurso6" value="1">Conteúdo em braile<br>
          <input type="checkbox" name="recurso7" value="1">Espaço amplo para locomoção<br>
        </div>

          <button class="button" type="submit">Cadastrar</button>
          <br><br><br>
        </form><br><br><br>

        
    </div>
  </div>
  </div>
</body>
<x-footer />
