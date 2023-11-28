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
    <div class="title">Editar informações da Empresa</div><br>
    <div class="content">

    <form action="{{ route('empresa.updateEmpresa') }}" method="post">
        @csrf
    <div class="user-details">
        <div class="input-box">
        <label for="nomeEmpresa">Nome da empresa: </label>
        <input type="text" id="nomeEmpresa" class="" name="nomeEmpresa" value="{{ $usuariosEmpresa['nome'] }}">
        </div>

        <div class="input-box">
        <label for="cnpjEmpresa">CNPJ (Cadastro Nacional de Pessoa Jurídica): </label>
        <input type="text" id="cnpjEmpresa" class="" name="cnpjEmpresa" value="{{ $usuariosEmpresa['cnpj'] }}">
        </div>
        
        <div class="input-box">
        <input type="hidden" id="emailEmpresa" class="" name="emailEmpresa" value="{{ $usuariosEmpresa['nome'] }}">

        <div class="input-box">
        <label for="senhaEmpresa">Senha: </label>
        <input type="password" id="senhaEmpresa" class="" name="senhaEmpresa">
        </div>

        <div class="input-box">
        <label for="confirmarSenhaEmpresa">Confirmar senha: </label>
        <input type="password" id="confirmarSenhaEmpresa" class="" name="confirmarSenhaEmpresa">
        </div>

        <div class="input-box">
        <label for="telefoneEmpresa">Telefone: </label>
        <input type="text" id="telefoneEmpresa" class="" name="telefoneEmpresa" value="{{ $usuariosEmpresa['telefone'] }}">
        </div>

        <div class="input-box">
        <label for="cidadeEmpresa">Cidade que a empresa se localiza: </label>
        <select name="cidadeEmpresa" value="{{ $usuariosEmpresa['cidade'] }}">
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
        <label for="ruaEndEmpresa">Rua: </label>
        <input type="text" id="ruaEndEmpresa" class="" name="ruaEndEmpresa" value="{{ $usuariosEmpresa['ruaEnd'] }}">
        </div>

        <div class="input-box">
        <label for="numEndEmpresa">Número: </label>
        <input type="number" id="numEndEmpresa" class="" name="numEndEmpresa" value="{{ $usuariosEmpresa['numEnd'] }}">
        </div>

        <div class="input-box">
        <label for="bairroEndEmpresa">Bairro: </label>
        <input type="text" id="bairroEndEmpresa" class="" name="bairroEndEmpresa" value="{{ $usuariosEmpresa['bairroEnd'] }}">
        </div>

        <div class="input-box">
        <label for="cepEndEmpresa">CEP: </label>
        <input type="text" id="cepEndEmpresa" class="" name="cepEndEmpresa" value="{{ $usuariosEmpresa['cepEnd'] }}">
        </div>

        <div class="input-box">
        <label for="objHistEmpresa">Objetivos e história da empresa: </label>
        <textarea name="objHistEmpresa" id="objHistEmpresa" value="">{{ $usuariosEmpresa['objHistEmpresa'] }}</textarea>
        </div>

        <button type="submit" class="button">Editar</button><br><br><br>
    </form><br><br><br><br>
    </div>
    </div>
    </div>
<x-footer />