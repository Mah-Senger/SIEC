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
<br><br><br><br><br><br>
<x-header />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('candidato.create') }}" method="post">
        @csrf
        <label for="nomeCandidato">Nome Completo: </label>
        <input type="text" id="nomeCandidato" class="" name="nomeCandidato" value="{{ old('nomeCandidato') }}"><br>

        <label for="cpfCandidato">CPF (Cadastro de Pessoa Física): </label>
        <input type="text" id="cpfCandidato" class="" name="cpfCandidato" value="{{ old('cpfCandidato') }}"><br>
        
        <label for="emailCandidato">E-mail: </label>
        <input type="email" id="emailCandidato" class="" name="emailCandidato" value="{{ old('emailCandidato') }}"><br>

        <label for="senhaCandidato">Senha: </label>
        <input type="password" id="senhaCandidato" class="" name="senhaCandidato"><br>

        <label for="confirmarSenhaCandidato">Confirmar senha: </label>
        <input type="password" id="confirmarSenhaCandidato" class="" name="confirmarSenhaCandidato"><br>

        <label for="telefoneCandidato">Telefone: </label>
        <input type="text" id="telefoneCandidato" class="" name="telefoneCandidato" value="{{ old('telefoneCandidato') }}"><br>

        <label for="cidadeCandidato">Cidade que o candidato reside: </label>
        <select name="cidadeCandidato" value="{{ old('cidadeCandidato') }}">
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

        <label for="experienciaCandidato">Experiência: </label>
        <input type="text" id="experienciaCandidato" class="" name="experienciaCandidato" value="{{ old('experienciaCandidato') }}"><br>

        <label for="idiomasCandidato">Idiomas fluentes: </label>
        <input type="text" id="idiomasCandidato" class="" name="idiomasCandidato" value="{{ old('idiomasCandidato') }}"><br>

        <label for="formacaoCandidato">Formação: </label>
        <input type="text" id="formacaoCandidato" class="" name="formacaoCandidato" value="{{ old('formacaoCandidato') }}"><br>

        <label for="formacaoDescricaoCandidato">Descrição da formação: </label>
        <textarea name="formacaoDescricaoCandidato" id="formacaoDescricaoCandidato" value="{{ old('formacaoDescricaoCandidato') }}"></textarea><br>

        <button type="submit">Cadastrar</button>
    </form><br>
<x-footer />