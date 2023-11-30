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
    <div class="container">
    <div class="title">Editar informações do Candidato</div><br>
    <div class="content">

    <form action="{{ route('candidato.updateCandidato') }}" method="post">
        @csrf
        <div class="user-details">
        <div class="input-box">
        <label for="nomeCandidato">Nome Completo: </label>
        <input type="text" id="nomeCandidato" class="" name="nomeCandidato" value="{{ $usuariosCandidatos['nome'] }}">
        </div>

        <div class="input-box">
        <label for="cpfCandidato">CPF (Cadastro de Pessoa Física): </label>
        <input type="text" id="cpfCandidato" class="" name="cpfCandidato" value="{{ $usuariosCandidatos['cpf'] }}">
        </div>
        
        <div class="input-box">
        <input type="hidden" id="emailCandidato" class="" name="emailCandidato" value="{{ $usuariosCandidatos['email'] }}">
        </div>

        <div class="input-box">
        <label for="senhaCandidato">Senha: </label>
        <input type="password" id="senhaCandidato" class="" name="senhaCandidato">
        </div>

        <div class="input-box">
        <label for="confirmarSenhaCandidato">Confirmar senha: </label>
        <input type="password" id="confirmarSenhaCandidato" class="" name="confirmarSenhaCandidato">
        </div>

        <div class="input-box">
        <label for="telefoneCandidato">Telefone: </label>
        <input type="text" id="telefoneCandidato" class="" name="telefoneCandidato" value="{{ $usuariosCandidatos['telefone'] }}">
        </div>

        <div class="input-box">
        <label for="cidadeCandidato">Cidade que o candidato reside: </label>
        <select name="cidadeCandidato" value="{{ $usuariosCandidatos['cidade'] }}">
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
        <label for="experienciaCandidato">Experiência: </label>
        <input type="text" id="experienciaCandidato" class="" name="experienciaCandidato" value="{{ $usuariosCandidatos['experiencia'] }}">
        </div>

        <div class="input-box">
        <label for="idiomasCandidato">Idiomas fluentes: </label>
        <input type="text" id="idiomasCandidato" class="" name="idiomasCandidato" value="{{ $usuariosCandidatos['idiomas'] }}">
        </div>

        <div class="input-box">
        <label for="formacaoCandidato">Formação: </label>
        <input type="text" id="formacaoCandidato" class="" name="formacaoCandidato" value="{{ $usuariosCandidatos['formacao'] }}">
        </div>

        <div class="input-box">
        <label for="formacaoDescricaoCandidato">Descrição da formação: </label>
        <textarea name="formacaoDescricaoCandidato" id="formacaoDescricaoCandidato" value="">{{ $usuariosCandidatos['formacaoDescricao'] }}</textarea><br>
        </div>

        {{-- <h3>Habilidades que Possui: </h3>
          <div class="alert alert-danger">
            <p>É preciso escolher novamente as suas habilidades. Durante o cadastro, foram marcadas as seguintes características: </p>
            @foreach ($habNecCandidatos as $habCandidato)
                <ul>{{ $habCandidato['nomeHabilidade'] }}</ul>
            @endforeach
          </div>
          <label class="details">Pode escolher quantas desejar</label><br><br>
          @foreach ($habilidades as $habilidade)
           <input type="checkbox" name="habilidade{{$habilidade['id']}}" value="{{$habilidade['id']}}">{{$habilidade['nomeHabilidade']}}<br>            
          @endforeach --}}

        <button type="submit" class="button">Editar</button>
    </form><br><br><br><br><br><br><br><br>
</div>
</div>
</div>
<x-footer />