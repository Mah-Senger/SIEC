<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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

    <form action="{{ route('empresa.create') }}" method="post">
        @csrf
        
        <div class="input-box">
            <span class="details" for="nomeEmpresa">Nome da empresa: </span>
            <input type="text" id="nomeEmpresa" class="" name="nomeEmpresa" value="{{ old('nomeEmpresa') }}" placeholder="Digite o nome da empresa"><br>
        </div>

        <div class="input-box">
            <span class="details" for="cnpjEmpresa">CNPJ (Cadastro Nacional de Pessoa Jurídica): </span>
            <input type="text" id="cnpjEmpresa" class="" name="cnpjEmpresa" value="{{ old('cnpjEmpresa') }}" placeholder="Digite o CNPJ da empresa"><br>
        </div>
        
        <div class="input-box">
            <span class="details" for="emailEmpresa">Email: </span>
            <input type="email" id="emailEmpresa" class="" name="emailEmpresa" value="{{ old('emailEmpresa') }}" placeholder="Exemplo: teste@teste.com"><br>
        </div>

        <div class="input-box">
            <span class="details" for="senhaEmpresa">Senha: </span>
            <input type="password" id="senhaEmpresa" class="" name="senhaEmpresa" placeholder="Digite a senha da empresa"><br>
        </div>

        <div class="input-box">
            <span class="details" for="confirmarSenhaEmpresa">Confirmar senha: </span>
            <input type="password" id="confirmarSenhaEmpresa" class="" name="confirmarSenhaEmpresa" placeholder="Confirme a senha"><br>
        </div>

        <div class="input-box">
            <span class="details" for="telefoneEmpresa">Telefone: </span>
            <input type="text" id="telefoneEmpresa" class="" name="telefoneEmpresa" value="{{ old('telefoneEmpresa') }}" placeholder="(xx)xxxx-xxxx"><br>
        </div>

        <div class="input-box">
            <span class="details" for="cidadeEmpresa">Cidade que a empresa se localiza: </span>
            <select name="cidadeEmpresa" value="{{ old('cidadeEmpresa') }}">
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
            </select><br>
        </div>

        <div class="input-box">
            <span class="details" for="ruaEndEmpresa">Rua: </span>
            <input type="text" id="ruaEndEmpresa" class="" name="ruaEndEmpresa" value="{{ old('ruaEndEmpresa') }}" placeholder="Digite a rua onde sua empresa reside"><br>
        </div>

        <div class="input-box">
            <span class="details" for="numEndEmpresa">Número: </span>
            <input type="number" id="numEndEmpresa" class="" name="numEndEmpresa" value="{{ old('numEndEmpresa') }}"placeholder="Digite o número da empresa"><br>
        </div>

        <div class="input-box">
            <span class="details" for="bairroEndEmpresa">Bairro: </span>
            <input type="text" id="bairroEndEmpresa" class="" name="bairroEndEmpresa" value="{{ old('bairroEndEmpresa') }}" placeholder="Digite o bairro onde sua empresa reside"><br>
        </div>

        <div class="input-box">
            <span class="details" for="cepEndEmpresa">CEP: </span>
            <input type="text" id="cepEndEmpresa" class="" name="cepEndEmpresa" value="{{ old('cepEndEmpresa') }}" placeholder="Digite o CEP da sua empresa"><br>
        </div>

        <div class="input-box">
            <span class="details" for="objHistEmpresa">Objetivos e história da empresa: </span>
            <textarea name="objHistEmpresa" id="objHistEmpresa" value="{{ old('objHistEmpresa') }}"placeholder="Digite a história e os objetivos da sua empresa"></textarea><br>
        </div>

        <button type="submit">Cadastrar</button>
    </form><br>
<x-footer />